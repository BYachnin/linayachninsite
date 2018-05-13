<?php
	//Exhibition page related flags
	$exhibition = true;	//Use special exhibition text
	$exhibition_paintings = true;	//Include the paintings on the exhibition page.
	$ex_title = "Sienna Gallery Exhibition";		//The title of the Exhibitions page.
	$upcoming_text = 
		'My next show will be held at the <a href="http://www.siennagalleryandframing.ca/" class="text-center" style="display: inline">Sienna Gallery</a> in Rockland, Ontario from June 1, 2018 - August 1, 2018.<br/><br/>
		The following paintings will be available for purchase starting on June 1.<br/>';
	
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