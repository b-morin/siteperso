<?php
#$page = $_SERVER['REQUEST_URI'];
$page=$_SERVER['SCRIPT_NAME'];
$img="user.png";

echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>";
echo "<html><head><title>ben.morin</title>";
echo "<link rel='stylesheet' media='screen' type='text/css' href='style/style.css' />";
echo "<link rel='stylesheet' media='screen' type='text/css' href='style/gallery.css' />";
echo "<link rel='icon' href='$img' type='image/png'>";

?>
<script type='text/javascript' src='highslide/highslide.js'></script>
<script type='text/javascript'>
	hs.registerOverlay(
		{
			thumbnailId: null,
				overlayId: 'controlbar',
				position: 'top right',
				hideOnMouseOut: true
			}
		);
		hs.graphicsDir = '../highslide/graphics/';
		hs.outlineType = 'rounded-white';
		hs.captionEval = 'this.thumb.title';
</script>

<?php
echo "</head><body>";
echo "<div id='marge_de_10'>";

if ($page=="/index.php") {
	$link=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')?"https":"http";
	$link .= "://".$_SERVER['HTTP_HOST']; 
}
elseif ($page == "/gallery.php")
	$link=$_REQUEST['repertoire'];
else
	$link=substr($page, 0, -4);

echo "<h1>".$link."</h1>";
echo "<table cellpadding='25'><tr><td valign='top'><a href='./index.php'  title='Back to homepage'><img src='./$img' width='300'></a></td><td>";
?>
