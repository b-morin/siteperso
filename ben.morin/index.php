<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Accueil</title>
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
<body>
	<h1>http://ben.morin.free.fr</h1>

	<?php
	function linkdir ($dir) {
		$dir = rtrim ($dir, '/');
		$l = array('.', '..','Thumbs.db','');
		$dossier= opendir($dir);
		while (($fichier = readdir($dossier))) {
			if (!in_array($fichier, $l)){
			echo "<a href=\"gallery.php?repertoire=".$fichier."\">".$fichier."</a><br>";
		}
		}
		echo "<br>";
	}
	$repsimages="./gallery";
	?>

	<table cellpadding="25">
		<tr>
			<td>
				<img src="./photomaton.jpg">
			</td>
			<td>
				<?php
				echo "<p>Cliquer sur le répertoire :</p>";
				linkdir ($repsimages);
				echo "<p>Autres fichiers partag&eacute;s : <a href=\"share\" target=_blank>Share</a></p>";
				echo "<p>Mes projets : <a href=\"share\">Share</a></p>";
				?>
			</td>
		</tr>
	</table>
 </body>
</html>