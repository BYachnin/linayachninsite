<?php
	//Announcement flags
	$announcement = false; // Add announcement to the homepage.
	$announcement_text =
		'Please join Lina and the other Galerie Old Chelsea artists for a group exhibition, "The Wonders of Winter," from January 27 to February 13.  For more information, visit <a href="https://www.galerieoldchelsea.ca/exhibitions" class="text-center" style="display: inline">Galerie Old Chelsea</a>';
	$announcement_text = "";  // Add to clear the announcement text from main page
	$hide_announce_img = false; // Include a poster type image?
	$announcement_img = "img/Des_gens_et_des_lieux_2022_Poster.jpg"; // Path to poster type image

	//Exhibition page related flags
	$exhibition = false;	//Use special exhibition text
	$exhibition_paintings = true;	//Include the paintings on the exhibition page.
	$ex_title = "Des gens et des lieux";		//The title of the Exhibitions page.
	$ex_banner_style = "bg-First-Snow-II";	//The background picture style for the exhibitions.  Must update CSS!
	$upcoming_text =
	'My upcoming show, <i>Des gens et des lieux</i>, will take place from October 7 - 26 at <a href="http://www.galerieoldchelsea.ca" class="text-center" style="display: inline">Galerie Old Chelsea</a>.<br><br><i>Des gens et des lieux</i> is a show about memorable places. Some are far. Some are close to home, but always close to the heart. This work crystallizes memories into images. Travels, hikes and outdoor activities influence my work. The use of colour is slightly exaggerated to draw attention to our beautiful surroundings. I work both in oils and watercolour. I enjoy the two mediums because they allow for a very different expression of my experiences.';
	// $upcoming_text = $announcement_text;


	//Standard exhibition blurb.
	$exhibition_std =
		'I typically have an exhibition every two years at the <a href="http://www.galerieoldchelsea.ca" class="text-center" style="display: inline">Galerie Old Chelsea</a>.  My work is also sometimes shown at shows throughout the Ottawa region.<br><br>
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