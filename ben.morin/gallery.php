 <head>
  <title>Benoit Morin - Gallerie photos</title>
  <link rel="stylesheet" media="screen" type="text/css" href="style/style.css" />
  <link rel="stylesheet" media="screen" type="text/css" href="style/gallery.css" />
  
  <script type="text/javascript" src="highslide/highslide.js"></script>
<!-- 
    2) Optionally override the settings defined at the top
    of the highslide.js file. The parameter hs.graphicsDir is important!
-->
<script type="text/javascript">
	// remove the registerOverlay call to disable the controlbar
	hs.registerOverlay(
    	{
    		thumbnailId: null,
    		overlayId: 'controlbar',
    		position: 'top right',
    		hideOnMouseOut: true
		}
	);
//    hs.graphicsDir = 'highslide/graphics/';
    hs.graphicsDir = '../highslide/graphics/';
    hs.outlineType = 'rounded-white';
    // Tell Highslide to use the thumbnail's title for captions
    hs.captionEval = 'this.thumb.title';
</script>
 </head>
<div id="marge_de_10">


<?php
function recursive_readdir ($dir) {
	$dir = rtrim ($dir, '/'); // on vire un eventuel slash mis par l'utilisateur de la fonction a droite du repertoire
	$repvignettes="thumb";

	if (is_dir ($dir)) // si c'est un repertoire
	$dossier= opendir($dir); // on l'ouvre
	else {
		exit;
	}
	while (($fichier = readdir($dossier))) {
		$l = array('.', '..','Thumbs.db','',$repvignettes);
		if (!in_array( $fichier, $l)){
		$path =$dir.'/'.$fichier;
		if (is_dir ($path)) {		
			$nom_du_rep = str_replace("_", " ", $fichier);
			echo "<a name=\"".$fichier."\"></a><h2>".$nom_du_rep."</h2>";
			recursive_readdir ($path);
		}
		else {
			$vignettes=$dir."/".$repvignettes;
			$extension = array(".jpg",".jpeg",".JPEG",".JPG");
			$tmp = $vignettes."/".$fichier;
			$tmp2 = $dir."/".$fichier;
		/*	echo "<br>image : ".$tmp."<br>";
			echo "thumb : ".$tmp."<br>";*/
			$commentaire = str_replace($extension, "", $fichier);
			$commentaire = str_replace("_", " ", $commentaire);
			?>
			<a id="thumb1" href="<?php print($tmp2);?>" class="highslide" onclick="return hs.expand(this)"><img src="<?php echo $tmp."\" title=\"".$commentaire."";?>"/></a>
			<?php
			}
	}
 }
 closedir ($dossier); // on ferme le repertoire courant
 }

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
