<?php
session_start();
include('../functions.php');
include('../model/connection.php');
include('../model/read.php');
include('../model/insert.php');
include('../model/update.php');


// ajouter la nouvelle commande
$date = date('d/m/y');
add_commande($db, $_SESSION['id_user'], $_SESSION['info_reservation']['id_projection'], $date, $_SESSION['info_reservation']['nombre_place_commande']);


// recupération de la fidélité et rajout de la nouvel valeur

$_SESSION['user_info'] = afficher_pseudo_connecte($db);
$fidelite_user = $_SESSION['user_info']['fidelite_user'];
update_fideliteadd_user($db, $fidelite_user, $_SESSION['info_reservation']['nombre_place_commande']);
$_SESSION['user_info'] = afficher_pseudo_connecte($db);


// lecture des infos de la commande pour afficher les infos aprés
$_SESSION['info_commande'] = read_commande($db);


// retirer le nombre de places acheté aux nombres de places disponibles
$nb_left_place = read_left_place($db, $_SESSION['info_commande']['fk_projection_commande']);
update_place_count($db, $_SESSION['info_commande']['fk_projection_commande'], $nb_left_place['left_place_count'], $_SESSION['info_reservation']['nombre_place_commande']);


header('Location: ../view/commande-réussie.php');
?>