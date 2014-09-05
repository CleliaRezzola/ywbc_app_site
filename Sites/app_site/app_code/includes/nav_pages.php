<?php

	$pages = array( );

	  $pages ['search'] = "Search";
	  $pages ['cellar'] = "My Cellar";
	  $pages ['reviews'] = "Reviews";
	  $pages ['nearby'] = "Nearby";

	function createNavFromArray($pages){

		$nav = "\n<nav>";
		 
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

		$nav .= "\n</nav>";
		 
		return $nav;
	}

	$nav=createNavFromArray($pages);
	echo $nav;

?>