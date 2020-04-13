<?php
$page = $_SERVER['REQUEST_URI'];
$img="user.png";

echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>";
echo "<html><head><title>ben.morin</title>";
echo "<link rel='stylesheet' media='screen' type='text/css' href='style/style.css' />";
echo "<link rel='stylesheet' media='screen' type='text/css' href='style/gallery.css' />";
echo "<link rel='icon' href='$img' type='image/png'>";

if ($page=="/index.php" || $page=="/" ||$page=="gallery.php") {
	
	$link=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')?"https":"http";
	$link .= "://".$_SERVER['HTTP_HOST']; 

	echo "<script type='text/javascript' src='highslide/highslide.js'></script>";
	echo "<script type='text/javascript'>";
	echo "	hs.registerOverlay(";
	echo "		{";
	echo "			thumbnailId: null,";
	echo "				overlayId: 'controlbar',";
	echo "				position: 'top right',";
	echo "				hideOnMouseOut: true";
	echo "			}";
	echo "		);";
	echo "		hs.graphicsDir = '../highslide/graphics/';";
	echo "		hs.outlineType = 'rounded-white';";
	echo "		hs.captionEval = 'this.thumb.title';";
	echo "</script>";
	echo "</head><body>";
}
else
	$link=substr($page, 0, -4);

echo "</head><body>";

echo "<div id='marge_de_10'>";

if ($page!="/gallery.php") {
	echo "<h1>".$link."</h1>";
	echo "<table cellpadding='25'><tr><td><img src='./$img'></td><td>";
}
?>
