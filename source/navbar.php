<?php
	//Define the name of the current page as a single item array.
	$curpage = array( basename($_SERVER['PHP_SELF'], '.phtml') );
	$curpage = $curpage[0];

	//Generate the text for a single list item.
	function addListItem($pageName, $pageTitle) {
		echo "						<li>\n";
		echo '							<a href="' . $pageName . '">' . $pageTitle . "</a>\n";
		echo "						</li>\n";
	}
	
	//Generate a list from an array of page names and titles.
	//Skip any pages in $skip.
	function generatePageList($list, $skip) {
		//Loop over all list items.
		foreach ($list as $name => $title) {
			//If the current list item name is in $skip, skip this item.
			if ( in_array($name, $skip) ) {
				continue;
			}
			
			//Generate the list text
			addListItem($name, $title);
		}
	}
	
//Generate the navbar HTML code.?>
<!-- navbar.php -->
<!-- bloc-navbar-mobile -->
<div class="bloc hidden-sm hidden-lg hidden-md bgc-gray-x11-gray l-bloc" id="bloc-navbar-mobile">
	<div class="container">
		<nav class="navbar row">
			<div class="navbar-header">
				<a href="http://www.facebook.com/linayachninart/" class="icon-padding" target="_blank"><span class="fa fa-facebook icon-md pull-left"></span></a><a href="https://www.linkedin.com/in/lina-yachnin-54a9a28a" target="_blank"><span class="fa fa-linkedin icon-md pull-left"></span></a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse navbar-1 collapse">
				<ul class="site-navigation nav navbar-nav list-dimensions">
<?php generatePageList($pageList, $curpage);?>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- bloc-navbar-mobile END -->

<!-- bloc-navbar-desktop -->
<div class="bloc hidden-xs hidden-sm bgc-white l-bloc pad-top-nav" id="bloc-navbar-desktop">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-4">
				<a href="index"><img src="img/short-sig.jpg" class="img-responsive" width="254" alt="Lina Yachnin"/></a>
			</div>
			<div class="col-sm-8">
				<ul class="list-unstyled list-horizontal-layout list-container">
<?php generatePageList($pageList, $curpage);?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- bloc-navbar-desktop END -->

<!-- bloc-navbar-tablet -->
<div class="bloc hidden-xs hidden-lg hidden-md bgc-white l-bloc" id="bloc-navbar-tablet">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-6">
				<a href="index"><img src="img/short-sig.jpg" class="img-responsive center-block" width="261" alt="Lina Yachnin"/></a>
			</div>
			<div class="col-sm-6">
				<ul class="list-unstyled list-horizontal-layout">
<?php generatePageList($pageList, $curpage);?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- bloc-navbar-tablet END -->
<!-- END OF navbar.php -->