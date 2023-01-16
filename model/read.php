<?php
include('connection.php');


function login_verify($db, $pseudo, $password){

  $query = "SELECT id_user, password_user FROM user_tab WHERE pseudo_user = (:post_pseudo)";
  $query_params = array(':post_pseudo' => $pseudo);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchall();
  $PASS;
  $ID;

  if (isset($result)){ 
    foreach ($result as $key => $value) {
      foreach ($value as $key => $value){
        if ($key == "id_user"){
          $ID = $value;
        } else if ($key == "password_user"){
          $PASS = $value;
        }
      }
    }
    if (password_verify($password, $PASS)){

      $_SESSION['id_user'] = $ID;
      return true;
    }
  }
  return false;
}

//------------------------------------------------------------------------------------

function pseudo_verify($db, $pseudo){
  $query = "SELECT COUNT(*) AS verif FROM user_tab WHERE pseudo_user = (:post_pseudo)";
  $pseudo = trim($pseudo);
  $query_params = array(':post_pseudo' => $pseudo);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchall();
  $result = $result[0];
  if ($result['verif'] > 0){
    $_SESSION['erreur'] = "Le pseudo existe déjà";
    return false;
  }
  return true;
}

//PD^Xc0ks\O



//-_-_-_-_-_-__-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_





function afficher_pseudo_connecte($db) {
  // Vérifie si l'utilisateur est connecté
  if (!isset($_SESSION['id_user'])) {
    return;
  }

  // Récupère l'identifiant de l'utilisateur connecté
  $id = $_SESSION['id_user'];

  // Exécute une requête SQL pour récupérer tous les champs de l'utilisateur
  $query = "SELECT * FROM user_tab WHERE id_user = (:post_id)";
  $query_params = array(':post_id' => $id);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchAll();

  // Affiche le tableau des informations de l'utilisateur 
  //print_r($user);
  return $result[0];
}

//-_-_-_-_-_-__-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_

function redirect_if_connect($db) {
  // Vérifie si l'utilisateur est connecté
  if (!isset($_SESSION['id_user'])) {
    unset($_SESSION['erreur']);
    header('Location: ../view/Login.php');
    exit();
  }
  header('Location: ../view/Espace-client.php');
  exit();
}

//-_-_-_-_-_-__-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_

function afficher_info_film($db, $id){


  //fonction pour prendre le nom du film
  $query = "SELECT nom_film, auteur_film, duree_film, date_sortie_film, nom_genre,
                   url_info_page, image_info_page, resume_info_page  
            FROM film_tab 
            INNER JOIN genre_tab ON id_genre = fk_genre_film
            INNER JOIN info_page_tab ON id_info_page = fk_info_page_film
            WHERE id_film = (:id)";
  $query_params = array(':id' => $id);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchAll();
  $user = $result[0];

  return $user;
}


//====================================================================

//fonction pour verifier le nombre d'entrée dans info_page_tab
function read_info_page($db){
  $query = "SELECT COUNT(*) AS verif FROM info_page_tab";
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute();
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchall();
  $result = $result[0];
  return $result['verif'];
}



function read_nom_film($db){
  $query = "SELECT nom_film
            FROM film_tab";
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute();
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchAll();

  return $result;
}

function read_id_salle($db){
  $query = "SELECT id_salle
            FROM salle_tab";
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute();
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchAll();

  return $result;
}

function read_projection($db, $id){
  $query = "SELECT id_projection, fk_salle_projection,
                   horraire_projection, prix_ticket_projection
            FROM projection_tab
            INNER JOIN film_tab ON id_film = fk_film_projection
            WHERE fk_film_projection = (:id)";
  $query_params = array(':id' => $id);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchAll();

  return $result;
}

function read_projection_commande($db, $id){
  $query = "SELECT id_projection, fk_salle_projection, nom_film,
                   horraire_projection, prix_ticket_projection
            FROM projection_tab
            INNER JOIN film_tab ON id_film = fk_film_projection
            WHERE id_projection = (:id)";
  $query_params = array(':id' => $id);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchAll();

  return $result[0];
}

//recuperer l'id de la dernière projection enregistrer
function read_last_projection($db){
  $query = "SELECT COUNT(*) AS verif FROM projection_tab";
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute();
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchall();
  $result = $result[0];
  return $result['verif'];
}

//verifier si la salle est occuper par un film 
function verify_projection($db){
  $query = "SELECT fk_salle_projection, horraire_projection
            FROM projection_tab";
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute();
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchall();
  return $result;
}


function read_commande($db){
  $query = "SELECT id_commande, fk_user_commande, fk_projection_commande, 
                   date_commande, nombre_place_commande
            FROM commande_tab
            ORDER BY id_commande DESC LIMIT 1";
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute();
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchAll();

  return $result[0];
}


function read_left_place($db, $projection){
  $query = "SELECT left_place_count
            FROM place_count_tab
            WHERE fk_projection_place_count = (:projection)";
  $query_params = array(':projection' => $projection);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchAll();

  return $result[0];
}

function read_nb_commande($db, $user){
  $query = "SELECT COUNT(id_commande) AS nb_film
            FROM commande_tab
            WHERE fk_user_commande = (:user)";
  $query_params = array(':user' => $user);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchAll();

  return $result[0];
}

function read_nb_place($db, $user){
  $query = "SELECT nombre_place_commande
            FROM commande_tab
            WHERE fk_user_commande = (:user)";
  $query_params = array(':user' => $user);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchAll();

  return $result;
}

//+==================================================================

function afficheallusers($db){
  $query = "SELECT * FROM user_tab";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
}


function afficheallprojection($db){
  $query = "SELECT * FROM projection_tab";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result;
}



?>