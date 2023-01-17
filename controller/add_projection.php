<?php
session_start();
include('../model/connection.php');
include('../model/read.php');
include('../model/insert.php');
include('../functions.php');

$verify = verify_projection($db);

//on recupere l'id du film
$duree_film = afficher_info_film($db, $_POST['id_film']);

//on parcours les projection pour voir si la salle est occupé à ce moment là
foreach($verify as $row){
	//on les recupere en seconde
	$time_stamp_projection = strtotime($_POST['horraire_projection']);
	$time_stamp_verify_projection = strtotime($row['horraire_projection']);
	if ($time_stamp_projection - $time_stamp_verify_projection < conversion_string_heure($duree_film)){
		$_SESSION['message'] = 'salle occupé';
		header('Location: ../view/admin.php');
		exit();
	}
}

add_projection($db, $_POST['salle_projection'], $_POST['id_film'], $_POST['horraire_projection'], $_POST['prix_projection']);
$id_projection = read_last_projection($db);

add_place_count($db, 200, 200, $id_projection['id_projection']);
header('Location: ../view/admin.php');
exit();
?>