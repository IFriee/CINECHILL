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

$payement = read_info_payement($db);

if ($payement == 0){
    header('Location: ../view/payement.php');
    exit();
}

unset($_SESSION['info_reservation']);

$_SESSION['info_reservation'] = read_projection_commande($db, $_POST['projection']);
$_SESSION['info_reservation']['nombre_place_commande'] = $_POST['nb_place'];

header('Location: ../view/order.php');
?>