<?php
session_start();
include('../functions.php');
include('../model/connection.php');
include('../model/read.php');

echo "salut";
echo "</br>";
$id = $_GET["id_film"];
$nom_film = afficher_film($db, $id);
echo "</br>";
echo $nom_film["nom_film"];
header('Location: ../view/films.php');
?>