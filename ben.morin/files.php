<?php
require 'functions.php';
include 'header.php';
include 'creds.php';
$msg = '';

if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
	if ($_POST['username'] == $user && $_POST['password'] == $passwd) {
		$_SESSION['valid'] = true;
		$_SESSION['timeout'] = time();
		$_SESSION['username'] = $username;
		$rep=$file;
		echo recursive_readdir($rep,False);
		$a=countfile($rep);
		echo ($a!=0)?"":"Aucun fichier en partage";

	}else {
		echo 'Mauvais user / password';
	}
}
else {?>
<p>Vous devez vous identifier pour acc&eacute;der &agrave; cette partie du site :</p>
<div class = "container">
<form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
<table>
	<tr><td>Username</td><td><input type = "text" name = "username" placeholder = "username" required autofocus></td></tr>
	<tr><td>Password</td><td><input type = "password" name = "password" placeholder = "password" required></td></tr>
	<tr><td></td><td><button type = "submit" name = "login">Login</button></td></tr>
</table>
</form>
</div> 
					
<?php			}

include 'footer.php';
?>
