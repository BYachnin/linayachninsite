<?php
	//Exhibition page related flags
	$exhibition = false;	//Use special exhibition text
	$ex_title = "Upcoming Exhibition: <i>Passerelle</i>";		//The title of the Exhibitions page.
	$upcoming_text = 
		'<i>Passerelle</i>, or <i>Gateway</i>, is a show representing my latest journeys along the coast of Spain, Sweden and the beautiful interior of Quebec. Whether they be landscapes, cityscapes or abstracts, I hope to communicate a strong emotional response through the common elements of colour, composition and design. Hoping to inspire you, the viewer, the way these places have inspired me.<br/><br/>
		Paintings that are still available from <i>Passerelle</i> can be viewed at the <a href="http://www.galerieoldchelsea.ca" class="text-center" style="display: inline">Galerie Old Chelsea.</a><br/>';
	
	//Standard exhibition blurb.
	$exhibition_std =
		'The best time to get a "Lina Yachnin original" is at one of my exhibitions.  I typically have an exhibition every two years at the <a href="http://www.galerieoldchelsea.ca" class="text-center" style="display: inline">Galerie Old Chelsea,</a> and several more in the Ottawa region.<br/><br/>
		See my <a href="about#bloc-about-cv" class="text-center" style="display: inline">CV</a> for past exhibitions, and check back here for news about upcoming exhibitions.  In the mean time, I always have work on display at <a href="http://www.galerieoldchelsea.ca" class="text-center" style="display: inline">Galerie Old Chelsea.</a>';
	
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