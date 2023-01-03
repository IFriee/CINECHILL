<?php
include('connection.php');

$sql = "SELECT * FROM user_tab";
$result = mysqli_query($conn, $sql);

// Vérification du résultat de la requête
if (mysqli_num_rows($result) > 0) {
  // Affichage des données de chaque enregistrement dans un tableau
  echo "<table>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Nom</th>";
  echo "<th>Email</th>";
  echo "</tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id_user"] . "</td>";
    echo "<td>" . $row["nom_user"] . "</td>";
    echo "<td>" . $row["email_user"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "Aucun enregistrement trouvé";
}

?>