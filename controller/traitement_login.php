<?php 	
session_start();
include('../functions.php');
include('../model/connection.php');
include('../model/read.php');

echo $_POST['pseudo'];
echo "</br>";
echo $_POST['password'];
echo "</br>";

unset($_SESSION['id_user']);
unset($_SESSION['debug1']);
unset($_SESSION['debug2']);
unset($_SESSION['debug3']);
 
if (login_verify($db, $_POST['pseudo'], $_POST['password'])){
	unset($_POST['password']);
	header('Location: ../view/Espace-client.php');
	exit();
	echo "connecter";
} else {
	$_SESSION['erreur'] = "Le mot de passe ou le nom d'utilisateur sont incorrect ou inexistant";

	header('Location: ../view/Login.php');
	exit();
}
?>