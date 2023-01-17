<?php 	
session_start();
include('../functions.php');
include('../model/connection.php');
include('../model/read.php');
 
if (login_verify($db, $_POST['pseudo'], $_POST['password'])){
	unset($_POST['password']);
	unset($_SESSION['erreur']);
	header('Location: ../view/Espace-client.php');
	exit();
} else {
	$_SESSION['erreur'] = "Le mot de passe et/ou le nom d'utilisateur sont incorrect ou inexistant";

	header('Location: ../view/Login.php');
	exit();
}
?>