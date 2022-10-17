<?php
	//Function to build a paintings bloc.
	function generate_paintings($heading, $csv, $pagetitle, $background = "white-2") {
		include 'source/paintings_outer.phtml';
	}

	//Function to give our CSV array keynames.
	function keyname($array) {
		$keyed_array = array(
			'newline' => filter_var($array[0], FILTER_VALIDATE_BOOLEAN),
			'divclass' => $array[1],
			'path' => $array[2],
			'imgclass' => $array[3],
			'title' => $array[4],
			'available' => filter_var($array[5], FILTER_VALIDATE_BOOLEAN),
			'dim' => $array[6],
			'media' => $array[7],
			'price' => $array[8]
		);

		return $keyed_array;
	}

	//Function to generate the paintings from csv.
	function paintings_from_csv($csv) {
		//Set a variable that tracks if this is the first row of paintings
		$first = TRUE;

		//Open the CSV file for reading
		if ($csvfile = fopen($csv, "r") ) {
			//Skip the first line.
			$paint = fgets($csvfile);

			//Loop over the rest of the file.
			while ( ($paint = fgetcsv($csvfile, 1000)) !==FALSE )  {
				//Convert the array into one with keyed names and correct booleans.
				$paint = keyname($paint);

				//TODO: Adjust for blank lines in the CSV.

				//If this is a new row of paintings.
				if ( $paint['newline'] ) {
					//If this is the very first row, add the first row div class.
					if ( $first ) {
						echo '<div class="row">'."\n";
						$first = FALSE;
					//Otherwise, close the previous div and open the next.
					} else {
						echo "\t\t\t\t".'</div>'."\n";
						echo "\t\t\t\t".'<div class="row row-move-down">'."\n";
					}
				}

				//Add the div class for this painting.
				echo "\t\t\t\t\t".'<div class="' . $paint['divclass'] . '">'."\n";
				//Add the painting image
				echo "\t\t\t\t\t\t".'<a href="#" data-lightbox="' . $paint['path'] . '" data-frame="dark-lb">' . "\n";
				echo "\t\t\t\t\t\t\t<picture>\n";
				echo "\t\t\t\t\t\t\t\t".'<source srcset="' . $paint['path'] . '" type="image/jpeg">' . "\n";
				echo "\t\t\t\t\t\t\t\t".'<img class="center-block ' . $paint['imgclass'] . '" alt="' . $paint['title'] . '">' . "\n";
				echo "\t\t\t\t\t\t\t</picture>\n";
				echo "\t\t\t\t\t\t</a>\n";

				//Add the painting title, including Sold tag if necessary.
				echo "\t\t\t\t\t\t".'<h3 class="text-center mg-sm">'."\n";
				echo "\t\t\t\t\t\t\t" . $paint['title'];
				if ( !$paint['available'] ) {
					echo ' (Sold)';
				}
				echo "\n";
				echo "\t\t\t\t\t\t</h3>\n";

				//If the painting is available, add the dimensions and price.
				if ( $paint['available'] ) {
					echo "\t\t\t\t\t\t".'<p class="text-center">'."\n";
					//Change the output depending on what combination of dimensions, media, and price we have.
					if ( $paint['dim'] ) {
						echo "\t\t\t\t\t\t\t" . $paint['dim'] . "<br>\n";
					}
					if ( $paint['media'] ) {
						echo "\t\t\t\t\t\t\t" . $paint['media'] . "<br>\n";
					}
					if ( $paint['price'] ) {
						echo "\t\t\t\t\t\t\t$" . $paint['price'] . "\n";
					}


					echo "\t\t\t\t\t\t</p>\n";
				}

				//Close the painting div.
				echo "\t\t\t\t\t</div>\n";
			}

			//Close the last row div
			echo "\t\t\t\t</div>\n";

			fclose($csvfile);
		}
	}

	//Function to generate the structured data from csvs.
	function structured_data_from_csv($csv_arr) {
		//Add one-per-page data
		echo "<script type='application/ld+json'>\n{\n";
		echo "\t\"@context\": \"http://www.schema.org\",\n";
		echo "\t\"@graph\": [\n";

		//Set a variable that tracks if this is the first painting
		$first = TRUE;

		//Loop over files
		foreach ($csv_arr as $csv) {
			//Open the CSV file for reading
			if ($csvfile = fopen($csv, "r") ) {
				//Skip the first line.
				$paint = fgets($csvfile);

				//Loop over the rest of the file.
				while ( ($paint = fgetcsv($csvfile, 1000)) !==FALSE )  {
					//Convert the array into one with keyed names and correct booleans.
					$paint = keyname($paint);

					//TODO: Adjust for blank lines in the CSV.

					//Skip unavailable paintings and ones without prices
					if ((!( $paint['available'] )) or (!( $paint['price'] ))) {
						continue;
					}

					if (! $first ) {
						echo ",\n";
					}
					$first = FALSE;

					//Build the common information
					echo "\t\t{\n";
					echo "\t\t\t\"@type\": \"Product\",\n";
					echo "\t\t\t\"artist\": \"Lina Yachnin\",\n";
					echo "\t\t\t\"artform\": \"Painting\",\n";
					echo "\t\t\t\"countryOfOrigin\": \"Canada\",\n";

					//Add painting-specific info
					echo "\t\t\t\"name\": \"" . $paint['title'] . "\",\n";
					echo "\t\t\t\"image\": \"" . $paint['path'] . "\",\n";
					echo "\t\t\t\"artMedium\": \"" . $paint['media'] . "\",\n";

					//Pricing info
					echo "\t\t\t\"offers\": {\n";
					echo "\t\t\t\t\"price\": " . $paint['price'] . ",\n";
					echo "\t\t\t\t\"priceCurrency\": \"CAD\",\n";
					echo "\t\t\t\t\"availability\": \"InStoreOnly\"}";

					//Close this painting
					echo "\n\t\t}";
				}
			}
			fclose($csvfile);

		}
		//End of the json-ld block
		echo "\n\t]}\n";
		echo "</script>\n";
	}
?>