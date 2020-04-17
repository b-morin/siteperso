<?php

function countfile($dir) {
	$nbfile=0;
	$l = array('.', '..','Thumbs.db','');
	$dossier= opendir($dir);
    while (($fichier = readdir($dossier))){
		if (!in_array($fichier, $l))
			$nbfile++;
	}
    closedir($dossier);
	return $nbfile;
}

function recursive_readdir ($dir,$image=True) {
	$dir = rtrim ($dir, '/');
	$repvignettes="thumb";
	$dossier = (is_dir ($dir))?opendir($dir):exit;
	$l = array('.', '..','Thumbs.db','',$repvignettes);
	while (($fichier = readdir($dossier))) {
		if (!in_array( $fichier, $l)){
			if ($dir=="./gallery") {
				echo "<a href=\"gallery.php?repertoire=".$fichier."\">".$fichier."</a><br />";
			} else {
				$path =$dir.'/'.$fichier;
				if (is_dir ($path)) {	
					$nom_du_rep = str_replace("_", " ", $fichier);
					echo ($image==True)?"<a name='$fichier'></a><h2>$nom_du_rep</h2>":"<h3>$nom_du_rep</h3>";
					recursive_readdir ($path,$image);
				}
				else {
					$link = $dir."/".$fichier;
					if ($image==True) {
						$vignettes=$dir."/".$repvignettes;
						$extension = array(".jpg",".jpeg",".JPEG",".JPG");
						$tmp = $vignettes."/".$fichier;
						$commentaire = str_replace($extension, "", $fichier);
						$commentaire = str_replace("_", " ", $commentaire);
						echo "<a id='thumb1' href=\"$link\" class='highslide' onclick='return hs.expand(this)'><img src='$tmp' title='$commentaire'/></a>";
					} else {
						echo "<li><a href=\"$link\" target='_blank'>$fichier</a></li>";
					}
				}
			}
		}
	}
	closedir ($dossier);
}


?>