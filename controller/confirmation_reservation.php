<?php
include('../functions.php');
include('../model/connection.php');
include('../model/read.php');
include('../model/insert.php');

date_default_timezone_set('Europe/Paris');
$date = date('d/m/y');

unset($_SESSION['info_commande']);

//add_commande($db, $_SESSION['id_user'], $_SESSION['info_reservation']['id_projection'], $date, $_SESSION['info_reservation']['nombre_place_commande']);
$_SESSION['info_commande'] = read_commande($db);

header('Location: ../view/commande-réussie.php');
?>