<?php

function linkdir($dir) {
	$dir = rtrim ($dir, '/');
	$l = array('.', '..','Thumbs.db','');
	$dossier= opendir($dir);
	$i=0;
    while (false !== ($fichier = readdir($dossier))) {
		if (!in_array($fichier, $l)){
			$i++;
			if ($dir=="./gallery") {
				echo "<a href=\"gallery.php?repertoire=".$fichier."\">".$fichier."</a><br>";
			} else {
				echo "<a href=\"$dir\/$fichier\" target=_blank>$fichier</a><br />\n";
			}
		}
	}
    closedir($dossier);
	echo "<br>";
	if ($dir=="./share") {echo ($i==0)?"<p>Aucun fichier partag&eacute;</p>":"<p>$i fichier(s)</p>";}
}

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


?>