<?php
include('connection.php');


function recupAllInfoAdmin($db, $pseudo, $password){

  $query = "SELECT id_user FROM film_tab WHERE pseudo_user = (:post_pseudo) AND password_user = (:post_password)";
  $query_params = array(':post_pseudo' => $pseudo, ':post_password' => $password);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchall();
  return (!empty($result)) ? $result: 'NULL';
}

function pseudo_verify($db, $pseudo){
  $query = "SELECT COUNT(*) AS verif FROM user_tab WHERE pseudo_user = (:post_pseudo)";
  $query_params = array(':post_pseudo' => $pseudo);
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  if ($result['verif'] > 0){
    $_SESSION['erreur'] = "Le pseudo existe déjà";
    return false;
  }
  return true;
}

?>