<?php
session_start();
include('../model/connection.php');
include('../model/read.php');
include('../model/insert.php');

add_projection($db, $_POST['salle_projection'], $_POST['nom_film'], $_POST['horraire_projection'], $_POST['prix_projection']);
header('Location: ../view/admin.php');
?>