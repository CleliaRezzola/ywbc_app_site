<?php

	$pages = array( );

	  $pages ['search'] = "Search";
	  $pages ['cellar'] = "My Cellar";
	  $pages ['reviews'] = "Reviews";
	  $pages ['nearby'] = "Nearby";

	function createNavFromArray($pages){
	 
		// Start creating a string of html for our nav:
		$nav = "\n<nav>";
		 
		// Create our LIs:
		foreach ($pages as $slug => $pageName){

	  	$class = "inactive";

	  	if($_GET[$page] == $slug) {

	 		$class = "active";
		}

	    $nav .= "\n\t<div class='".$class." ".$slug."'>
		    <div class='nav".$slug."'>
		    <a href='index.php?page=".$slug."'>"
		    .$pageName."</a></h2></li>";
		}
		 
		// Finish creating the string of html for our nav:
		$nav .= "\n</nav>";
		 
		return $nav;
	}

	$nav=createNavFromArray($pages);
	echo $nav;

?>