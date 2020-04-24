<?php
include 'header.php';
require 'functions.php';

if(isset($_REQUEST['repertoire'])){
	$page=$_REQUEST['repertoire'];
	/*
	if(stristr($page, 'coucou') == TRUE) {
		echo $page;
		die;
	}
	

	if ($page=='..' or $page=='../') {
		die;
	}
	else {*/
	
		$repsimages="./gallery/"."$page";
	//}
	recursive_readdir ($repsimages);
} else
	echo "La page demandee n'existe pas";

?>
<p><a href="index.php">Retour a l'accueil</a></p>

<div id="controlbar" class="highslide-overlay controlbar">
	<a href="#" class="previous" onclick="return hs.previous(this)" title="Previous (left arrow key)"></a>
	<a href="#" class="next" onclick="return hs.next(this)" title="Next (right arrow key)"></a>
    <a href="#" class="highslide-move" onclick="return false" title="Click and drag to move"></a>
    <a href="#" class="close" onclick="return hs.close(this)" title="Close"></a>
</div>
