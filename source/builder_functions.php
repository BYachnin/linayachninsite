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
				echo "\t\t\t\t\t\t".'<a href="#" data-lightbox="' . $paint['path'] . '" data-frame="dark-lb"><img src="' . $paint['path'] . '" class="center-block ' . $paint['imgclass'] . '" alt="' . $paint['title'] . '"/></a>'."\n";

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
						echo "\t\t\t\t\t\t\t" . $paint['dim'] . "<br/>\n";
					}
					if ( $paint['media'] ) {
						echo "\t\t\t\t\t\t\t" . $paint['media'] . "<br/>\n";
					}
					if ( $paint['price'] ) {
						echo "\t\t\t\t\t\t\t" . $paint['price'] . "\n";
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
?>