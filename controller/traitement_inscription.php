<?php 
session_start();
include('../functions.php');
include('../model/connection.php');
include('../model/read.php');
include('../model/insert.php');
//-----------mettre tout en htmlspecialchart

if (Verifier_nom_prenom($_POST['nom'], $_POST['prenom'])){
	if (verifier_email($_POST['email'])){
		if (pseudo_verify($db, $_POST['pseudo'])){
			if (Verifier_mdp($_POST['password'])){
				if (comparer_mdp($_POST['password'], $_POST['password_verify'])){
					$hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
					unset($_POST['password']);
					unset($_POST['password_verify']);
					if(Verifier_date_naissance($_POST['date_naissance'])){
						add_user($db, $_POST['nom'], $_POST['prenom'], $_POST['pseudo'], $hashed_password, $_POST['email'], $_POST['date_naissance']);
						header('Location: ../view/Login.php');
						exit();
					}
				}
			}
		}
	}
}
header('Location: ../view/Register.php');
exit();
?>