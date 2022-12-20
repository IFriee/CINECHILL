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
  if ($result['verif'] > 0){
    $_SESSION['erreur'] = "Le pseudo existe déjà";
    return false;
  }
  return true;
}

//PD^Xc0ks\O

?>