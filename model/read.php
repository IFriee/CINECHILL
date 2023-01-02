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
  $user = $result[0];

  // Affiche le tableau des informations de l'utilisateur 
  //print_r($user);
  return $user;
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

function afficher_film($db, $id){


  //fonction pour prendre le nom du film
  $query = "SELECT nom_film FROM film_tab WHERE id_film = (:id)";
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
?>