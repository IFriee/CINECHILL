<?php
session_start();
include('../model/connection.php');
include('../model/read.php');
include('../model/insert.php');


add_info_page($db, $_POST['url_info_page'], $_POST['image_info_page'], $_POST['resume_info_page']);

$count = read_info_page($db);

add_film($db, $_POST['nom_film'], $_POST['auteur_film'], $_POST['duree_film'], $_POST['genre_film'], $_POST['date_sortie_film'], $count);

header('Location: ../view/admin.php');
?>