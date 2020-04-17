<?php
$page = $_SERVER['REQUEST_URI'];
if ($page=="/index.php" || $page=="/") {
	echo "<p>Mes projets : <a href=\"https://github.com/b-morin\" target=_blank>GitHub</a>&nbsp;<img src=\"./github.png\" width='16' height='16'></p>";
} else {
	echo "<p><a href='./index.php'>Retour &agrave; l'accueil</a></p>";
}
echo "</td></tr></table></html></body>";
?>