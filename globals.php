<?php
	//Exhibition page related flags
	$exhibition = true;	//Use special exhibition text
	$exhibition_paintings = false;	//Include the paintings on the exhibition page.
	$ex_title = "Through the Trees";		//The title of the Exhibitions page.
	$ex_banner_style = "bg-Through-the-Trees";	//The background picture style for the exhibitions.  Must update CSS!
	$upcoming_text = 
		'My next show, <i>Through the Trees</i>, will be taking place from October 16 - November 4 at <a href="http://www.galerieoldchelsea.ca" class="text-center" style="display: inline">Galerie Old Chelsea</a>.<br/>The Canadian landscape is an inspiration. Our home in Quebec is in an old growth forest which I love. It has provided endless possibilities for colourful, energetic paintings. This show is focused on our relationship with trees. Through a semi-abstract approach, integrating the elements of composition and colour, I hope to capture the extraordinary. The landscape is always changing. Painting the trees first gives them primary importance. The background brings us into the scene and gives us a place to be. Enjoy looking “Through The Trees” and my new works in watercolour!';
	
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