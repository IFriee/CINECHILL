<?php 	
session_start();
include('../functions.php');
include('../connection.php');
 
$file = "login.txt";
$read = file($file);
$fileopen=(fopen("$file",'rb'));
while(!feof($fileopen)){
	$array_element_profil = (explode(" ", fgets($fileopen)));
    if ($array_element_profil[0] == $_POST["login_txt"]){
    	if (rtrim($array_element_profil[4]) == $_POST["password_txt"]){
    		echo "ok";
    		$_SESSION['user'] = $_POST["login_txt"];
    		header('Location: ../view/page_acceuille.php');
			exit();
    	}
    }
}
$_SESSION['erreur'] = "Le mot de passe ou le nom d'utilisateur sont incorrect ou inexistant";
fclose($fileopen);
header('Location: ../view/page_de_login.php');
exit();
?>