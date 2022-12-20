<?php
include('connection.php');
function add_genre($db){
	$query = "INSERT INTO genre_tab (nom_genre) VALUES(:nom_genre)";
    $query_params = array(':nom_genre'=>'romance');
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}
function add_film($db){
	$query = "INSERT INTO film_tab (nom_film, auteur_film, duree_film, fk_genre_film, date_sortie_film) 
							VALUES(:nom_film, :auteur_film, :duree_film, :fk_genre_film, :date_sortie_film)";
    $query_params = array(':nom_film'=>'pretty women',
                          ':auteur_film'=>'louis',
                          ':duree_film'=>'1:30:00',
    					  ':fk_genre_film'=>'1',
						  ':date_sortie_film'=>'20121104');
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}

function add_salle($db){
    $query = "INSERT INTO salle_tab (nombre_place_salle) VALUES(:nombre_place_salle)";
    $query_params = array(':nombre_place_salle'=>200);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}

function add_user($db, $nom, $prenom, $pseudo, $password, $mail, $date_naissance) {
    $query = "INSERT INTO user_tab (nom_user, prenom_user, pseudo_user, password_user, mail_user, date_naissance_user) 
                            VALUES(:nom_user, :prenom_user, :pseudo_user, :password_user, :mail_user, :date_naissance_user)";
    $query_params = array(':nom_user'=>$nom,
                          ':prenom_user'=>$prenom,
                          ':pseudo_user'=>$pseudo,
                          ':password_user'=>$password,
                          ':mail_user'=>$mail,
                          ':date_naissance_user'=>$date_naissance);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}
//echo add_info1($db);
//echo add_info2($db);
?>