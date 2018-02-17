<?php
	//Exhibition page related flags
	$exhibition = false;	//Use special exhibition text
	$ex_title = "Exhibitions";		//The title of the Exhibitions page.
	$upcoming_text = 
		'<i>Passerelle</i>, or <i>Gateway</i>, is a show representing my latest journeys along the coast of Spain, Sweden and the beautiful interior of Quebec. Whether they be landscapes, cityscapes or abstracts, I hope to communicate a strong emotional response through the common elements of colour, composition and design. Hoping to inspire you, the viewer, the way these places have inspired me.<br/><br/>
		Paintings that are still available from <i>Passerelle</i> can be viewed at the <a href="http://www.galerieoldchelsea.ca" class="text-center" style="display: inline">Galerie Old Chelsea.</a><br/>';

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
		"contact" => "Contact");
		
	$exhibition_std = "";
	
	//Set $exhibition_text to $upcoming_text if $exhibition is flagged true.  Otherwise, use standard $exhibition_std.
	if ( $exhibition ) {
		$exhibition_text = $upcoming_text;
	} else {
		$exhibition_text = $exhibition_std;
	}
?>