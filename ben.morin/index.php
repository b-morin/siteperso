<?php

unset($_SESSION["username"]);
unset($_SESSION["password"]);
header('Refresh: 2; URL = index.php');

require 'functions.php';
include 'header.php';

$repsimages="./gallery";
$repshare="./share";

$a=countfile($repsimages);

if ($a!="0"){
	echo "<h2>Gallerie d'images</h2>";
	recursive_readdir($repsimages,False);
}

echo "<p><hr /></p>";
echo "<a href=\"files.php\">Fichiers en t&eacute;l&eacute;chargements</a>";

include 'footer.php';
?>