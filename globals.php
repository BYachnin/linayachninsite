<?php
	//Announcement flags
	$announcement = true; // Add announcement to the homepage.
	$announcement_text =
		'Please join Lina and the other Galerie Old Chelsea artists for a group exhibition, "The Wonders of Winter," from January 27 to February 13.  For more information, visit <a href="https://www.galerieoldchelsea.ca/exhibitions" class="text-center" style="display: inline">Galerie Old Chelsea</a>';
	$hide_announce_img = false; // Include a poster type image?
	$announcement_img = "img/Wonders_of_Winter_2022_Poster.jpg"; // Path to poster type image

	//Exhibition page related flags
	$exhibition = true;	//Use special exhibition text
	$exhibition_paintings = true;	//Include the paintings on the exhibition page.
	$ex_title = "The Wonders of Winter";		//The title of the Exhibitions page.
	$ex_banner_style = "bg-First-Snow-II";	//The background picture style for the exhibitions.  Must update CSS!
	// $upcoming_text =
	// 	'My most recent show, <i>Through the Trees</i>, took place from October 16 - November 4 at <a href="http://www.galerieoldchelsea.ca" class="text-center" style="display: inline">Galerie Old Chelsea</a>.  A few paintings from the show are still available at the Galerie.<br/><br/>The Canadian landscape is an inspiration. Our home in Quebec is in an old growth forest which I love. It has provided endless possibilities for colourful, energetic paintings. This show is focused on our relationship with trees. Through a semi-abstract approach, integrating the elements of composition and colour, I hope to capture the extraordinary. The landscape is always changing. Painting the trees first gives them primary importance. The background brings us into the scene and gives us a place to be. Enjoy looking “Through The Trees” and my new works in watercolour!<br/><br/>A recent <a href="https://www.lowdownonline.com/" class="text-center" style="display: inline"><i>The Low Down</i></a> article featured my painting, <i>Through the Trees</i>, in an article on supporting local artists and galleries.  Please <a href="http://origin.misc.pagesuite.com/pdfdownload/ec015f5c-cc01-44c0-8e44-2862e885d4d4.pdf" class="text-center" style="display: inline">check it out</a>!';
	$upcoming_text = $announcement_text;


	//Standard exhibition blurb.
	$exhibition_std =
		'I typically have an exhibition every two years at the <a href="http://www.galerieoldchelsea.ca" class="text-center" style="display: inline">Galerie Old Chelsea</a>.  My work is also sometimes shown at shows throughout the Ottawa region.<br/><br/>
		See my <a href="about#bloc-about-cv" class="text-center" style="display: inline">CV</a> for a listing of past shows, and check back here for news about upcoming exhibitions.  In the mean time, I always have work on display and <a href="available_works" class="text-center" style="display: inline">available for purchase</a> at <a href="http://www.galerieoldchelsea.ca" class="text-center" style="display: inline">Galerie Old Chelsea.</a>';

	//Set $exhibition_text to $upcoming_text if $exhibition is flagged true.  Otherwise, use standard $exhibition_std.
	//Also swap out the special title if NOT an exhibition.
	if ( $exhibition ) {
		$exhibition_text = $upcoming_text;
	} else {
		$exhibition_text = $exhibition_std;
		$ex_title = "Exhibitions";
	}

	//List of pages
	$pageList = array(
		"index" => "Home",
		"exhibitions" => $ex_title,
		"about" => "About",
		"available_works" => "Available Works",
		"florals" => "Florals",
		"landscapes" => "Landscapes",
		"abstracts" => "Abstracts",
		"urbanscapes" => "Urbanscapes",
		"contact" => "Contact"
		);
?>