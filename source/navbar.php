<?php
	//Define the name of the current page as a single item array.
	$curpage = array( basename($_SERVER['PHP_SELF'], '.phtml') );

	//Generate the text for a single list item.
	function addListItem($pageName, $pageTitle) {
		echo "						<li>\n";
		echo '							<a class="nav-text" href="' . $pageName . '">' . $pageTitle . "</a>\n";
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
<!-- This is the spinning wheel load graphic, which will disappear after page load -->
<div id="page-loading-blocs-notifaction" class="bloc-fill-screen"></div>
<!-- Spinning wheel load graphic END -->
<!-- navbar.php -->
<!-- bloc-navbar-mobile -->
<div class="bloc hidden-sm hidden-lg hidden-md bgc-navbar l-bloc nav" id="bloc-navbar-mobile">
	<div class="container">
		<nav class="navbar row">
			<div class="navbar-header">
				<a href="https://www.instagram.com/linayachnin/" class="icon-padding" target="_blank"><span class="fa fa-instagram icon-md pull-left"></span></a>
				<a href="https://www.linkedin.com/in/lina-yachnin-54a9a28a" target="_blank"><span class="fa fa-linkedin icon-md pull-left"></span></a>
				<button id="nav-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
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
<div class="hidden-xs bgc-main-bg pad-top-nav" id="bloc-navbar-desktop">
	<div class="nav-grid">
		<div class="nav-sig-container">
			<a href="index"><img src="img/short-sig.jpg" class="nav-sig" alt="Lina Yachnin"></a>
		</div>
		<div class="nav-menu">
			<ul class="list-unstyled list-horizontal-layout">
<?php generatePageList($pageList, $curpage);?>
			</ul>
		</div>
	</div>
</div>
<!-- bloc-navbar-desktop END -->
<!-- END OF navbar.php -->