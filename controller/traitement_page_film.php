<?php
session_start();
include('../functions.php');
include('../model/connection.php');
include('../model/read.php');


$id = $_GET["id_film"];
$_SESSION['info_film'] = afficher_info_film($db, $id);

var_dump($_SESSION['info_film']);
header('Location: ../view/films.php');
?>