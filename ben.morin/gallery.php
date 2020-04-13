 <head>
  <title>Benoit Morin - Gallerie photos</title>
  <link rel="stylesheet" media="screen" type="text/css" href="style/style.css" />
  <link rel="stylesheet" media="screen" type="text/css" href="style/gallery.css" />
  
  <script type="text/javascript" src="highslide/highslide.js"></script>
  <script type="text/javascript">
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
 </head>
<div id="marge_de_10">


<?php

require 'functions.php';


if(isset($_REQUEST['repertoire'])){

$bidule=$_REQUEST['repertoire'];
$repsimages="./gallery/"."$bidule";
//si la variable existe on affiche sa valeur
echo "<h1>".$bidule."</h1>";
?>
<p>
<a href="index.php">Retour a l'accueil</a>
</p>
<?php
recursive_readdir ($repsimages);
?>
<p>
<a href="index.php">Retour a l'accueil</a>
</p>
<?php

} else {
// si elle n'existe pas...
echo "La page demandee n'existe pas";
?>
<p>
<a href="index.php">Retour a l'accueil</a>
</p>
<?php
}
?>
<!-- 
	5 (optional). This is the markup for the controlbar. The conrolbar is tied to the expander
	in the script tag at the top of the file.
-->
<div id="controlbar" class="highslide-overlay controlbar">
	<a href="#" class="previous" onclick="return hs.previous(this)" title="Previous (left arrow key)"></a>
	<a href="#" class="next" onclick="return hs.next(this)" title="Next (right arrow key)"></a>
    <a href="#" class="highslide-move" onclick="return false" title="Click and drag to move"></a>
    <a href="#" class="close" onclick="return hs.close(this)" title="Close"></a>
</div>
</div>
