<?php
function delete_user($db) {
  // Vérifie si l'utilisateur a soumis le formulaire
  if (!isset($_POST['user-id'])) {
    return;
  }

  // Récupère l'identifiant de l'utilisateur à supprimer
  $id = $_POST['user-id'];

  // Exécute une requête SQL pour supprimer l'utilisateur
  $query = "DELETE FROM user_tab WHERE id_user = (:post_id)";
  $query_params = array(':post_id' => $id);
  try {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  } catch (PDOException $ex) {
      die("Failed to run query: " . $ex->getMessage());
  }

  // Redirige l'utilisateur vers la page d'accueil
  header("Location: /");
  die("Redirecting to /");
}


?>