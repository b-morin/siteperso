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
require 'functions.php';
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
				echo "<p>Autres fichiers partag&eacute;s : <a href=\"share.php\">Share</a></p>";
				echo "<p>Mes projets : <a href=\"https://github.com/b-morin\" target=_blank>GitHub</a>&nbsp;<img src=\"./github.png\" width='15' height='15'></p>";
				?>
			</td>
		</tr>
	</table>
 </body>
</html>