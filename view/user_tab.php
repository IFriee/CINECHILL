<?php


include("../model/read.php");
$result = afficheallusers($db);


if (count($result) > 0) {
  // Affichage des données de chaque enregistrement dans un tableau
  echo "<table>";
  echo "<tr>";
  echo "<th>ID</th>";
  echo "<th>Nom</th>";
  echo "<th>Prénom</th>";
  echo "<th>Pseudo</th>";
  echo "<th>Email</th>";
  echo "<th>Date de naissance</th>";
  echo "<th>Points de fidélité</th>";
  echo "</tr>";
  foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . $row["id_user"] . "</td>";
    echo "<td>" . $row["nom_user"] . "</td>";
    echo "<td>" . $row["prenom_user"] . "</td>";
    echo "<td>" . $row["pseudo_user"] . "</td>";
    echo "<td>" . $row["mail_user"] . "</td>";
    echo "<td>" . $row["date_naissance_user"] . "</td>";
    echo "<td>" . $row["fidelite_user"] . "</td>";
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