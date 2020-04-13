<html>
 <head>
  <title>Partage</title>
  <link rel="stylesheet" media="screen" type="text/css" href="../style/style.css" />
  <link rel="stylesheet" media="screen" type="text/css" href="../style/gallery.css" />
 </head>

<body>

<h1>Mon partage</h1>

	<table cellpadding="25"><tr>
<td>
				<img src="../photomaton.jpg">

</td>

<td>

<?php
$i =0;
if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && $file != "index.php") {
            echo "<a href=\"$file\">$file</a><br />\n";
			$i++;
        }
    }
    closedir($handle);
}
if ($i == 0) {
	echo "<p>Aucun fichier partag&eacute;</p>";
} else {
	echo "<p>$i fichier(s)</p>";
}
?>
<p><a href="../index.php">Retour &agrave; l'accueil</a></p>
</td>
<tr>
</table>

 </body>
</html>