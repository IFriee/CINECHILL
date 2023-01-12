<?php
session_start();
include('../functions.php');
include('../model/connection.php');
include('../model/read.php');
include('../model/insert.php');

date_default_timezone_set('Europe/Paris');
$date = date('d/m/y');


//add_commande($db, $_SESSION['id_user'], $_POST['ticket-time'], $date);
$com = read_commande($db);
$_SESSION['info_commande'] = $com[0];

header('Location: ../view/order.php');
?>