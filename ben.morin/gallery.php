<?php
include 'header.php';
?>

<div id="marge_de_10">

<?php

require 'functions.php';


if(isset($_REQUEST['repertoire'])){

$bidule=$_REQUEST['repertoire'];
$repsimages="./gallery/"."$bidule";
//si la variable existe on affiche sa valeur
echo "<h1>".$bidule."</h1>";
?>
<!--p><a href="index.php">Retour a l'accueil</a></p-->
<?php
recursive_readdir ($repsimages);
?>
<p><a href="index.php">Retour a l'accueil</a></p>
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
<div id="controlbar" class="highslide-overlay controlbar">
	<a href="#" class="previous" onclick="return hs.previous(this)" title="Previous (left arrow key)"></a>
	<a href="#" class="next" onclick="return hs.next(this)" title="Next (right arrow key)"></a>
    <a href="#" class="highslide-move" onclick="return false" title="Click and drag to move"></a>
    <a href="#" class="close" onclick="return hs.close(this)" title="Close"></a>
</div>
</div>
