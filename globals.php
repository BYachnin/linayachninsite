<?php
	//Announcement flags
	$announcement = true; // Add announcement to the homepage.
	$announcement_text =
		'Please join Lina and the other Galerie Old Chelsea artists for a group exhibition, "The Wonders of Winter," from January 27 to February 13.  For more information, visit <a href="https://www.galerieoldchelsea.ca/exhibitions" class="text-center" style="display: inline">Galerie Old Chelsea</a>';
	$announcement_text = "";  // Add to clear the announcement text from main page
	$hide_announce_img = false; // Include a poster type image?
	$announcement_img = "img/Connecte_Poster_2025.jpg"; // Path to poster type image

	//Exhibition page related flags
	$exhibition = true;	//Use special exhibition text
	$exhibition_paintings = true;	//Include the paintings on the exhibition page.
	$ex_title = "Connecté";		//The title of the Exhibitions page.
	$ex_banner_style = "bg-First-Snow-II";	//The background picture style for the exhibitions.  Must update CSS!
	$upcoming_text =
	'My upcoming show, <i>Connecté</i>, will take place from October 16 - November 2 at <a href="http://www.galerieoldchelsea.ca" class="text-center" style="display: inline">Galerie Old Chelsea</a>.<br><br>';
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