<?php


include('connection.php');

$query = "SELECT * FROM projection_tab";
$stmt = $db->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();

if (count($result) > 0) {
  // Affichage des données de chaque enregistrement dans un tableau
  echo "<table>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>salle</th>";
  echo "<th>film</th>";
  echo "<th>horraire</th>";
  echo "<th>prix</th>";
  foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . $row["id_projection"] . "</td>";
    echo "<td>" . $row["id_salle"] . "</td>";
    echo "<td>" . $row["nom_film"] . "</td>";
    echo "<td>" . $row["horraire_projection"] . "</td>";
    echo "<td>" . $row["prix_ticket_projection"] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    } else {
    echo "Aucun enregistrement trouvé";
    }

?>

<style>table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.table-header {
  font-weight: bold;
  background-color: #333333;
  color: white;
}</style>