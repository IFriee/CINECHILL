<?php
session_start();
include('../functions.php');
include('../model/connection.php');
include('../model/read.php');
include('../model/insert.php');

if (!isset($_SESSION['id_user'])) {
    unset($_SESSION['erreur']);
    header('Location: ../view/Login.php');
    exit();
  }

date_default_timezone_set('Europe/Paris');
$date = date('d/m/y');


//add_commande($db, $_SESSION['id_user'], $_POST['projection'], $date, $_POST['nb_place']);
$com = read_commande($db);
$_SESSION['info_commande'] = read_info_commande($db, $com[0]['id_commande']);

header('Location: ../view/order.php');
?>