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



function add_film($db, $nom, $auteur, $duree, $genre, $sortie, $info){
	$query = "INSERT INTO film_tab (nom_film, auteur_film, duree_film, fk_genre_film, date_sortie_film, fk_info_page_film) 
							VALUES(:nom_film, :auteur_film, :duree_film, :fk_genre_film, :date_sortie_film, :fk_info_page_film)";
    $query_params = array(':nom_film'=>$nom,
                          ':auteur_film'=>$auteur,
                          ':duree_film'=>$duree,
    					  ':fk_genre_film'=>$genre,
						  ':date_sortie_film'=>$sortie,
                          ':fk_info_page_film'=>$info);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}



function add_info_page($db, $url, $image, $resume){
    $query = "INSERT INTO info_page_tab (url_info_page, image_info_page, resume_info_page) 
                            VALUES(:url_info_page, :image_info_page, :resume_info_page)";
    $query_params = array(':url_info_page'=>$url,
                          ':image_info_page'=>$image,
                          ':resume_info_page'=>$resume);
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

function add_projection($db, $salle, $film, $horraire, $prix){
    $query = "INSERT INTO projection_tab (fk_salle_projection, fk_film_projection, horraire_projection, prix_ticket_projection) 
    VALUES(:fk_salle_projection, :fk_film_projection, :horraire_projection, :prix_ticket_projection)";
    $query_params = array(':fk_salle_projection'=>$salle,
                          ':fk_film_projection'=>$film,
                          ':horraire_projection'=>$horraire,
                          ':prix_ticket_projection'=>$prix);
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