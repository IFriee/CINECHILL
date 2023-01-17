<?php
include('connection.php');


function delete_user($db, $id) {
  // Vérifie si l'utilisateur a soumis le formulaire
  if (!isset($id)) {
    return;
  }


  // Exécute une requête SQL pour supprimer l'utilisateur
  $query = "DELETE FROM user_tab WHERE id_user = (:post_id)";
  $query_params = array(':post_id' => $id);
  try {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  } catch (PDOException $ex) {
      die("Failed to run query: " . $ex->getMessage());
  }

  // Redirige l'utilisateur vers la page d'admin
  header("Location: ../view/admin.php");
}




function delete_film($db, $id) {
  // Vérifie si l'utilisateur a soumis le formulaire
  if (!isset($id)) {
    return;
  }


  // Exécute une requête SQL pour supprimer l'utilisateur
  $query = "DELETE FROM film_tab WHERE id_film = (:post_id)";
  $query_params = array(':post_id' => $id);
  try {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  } catch (PDOException $ex) {
      die("Failed to run query: " . $ex->getMessage());
  }

  // Redirige l'utilisateur vers la page d'admin
  header("Location: ../view/admin.php");
}




function delete_projection($db, $id) {
  // Vérifie si l'utilisateur a soumis le formulaire
  if (!isset($id)) {
    return;
  }

  $query = "DELETE FROM place_count_tab WHERE fk_projection_place_count = (:post_id)";
  $query_params = array(':post_id' => $id);
  try {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  } catch (PDOException $ex) {
      die("Failed to run query: " . $ex->getMessage());
  }


  // Exécute une requête SQL pour supprimer l'utilisateur
  $query = "DELETE FROM projection_tab WHERE id_projection = (:post_id)";
  $query_params = array(':post_id' => $id);
  try {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  } catch (PDOException $ex) {
      die("Failed to run query: " . $ex->getMessage());
  }

  // Redirige l'utilisateur vers la page d'admin
  header("Location: ../view/admin.php");
}


?>