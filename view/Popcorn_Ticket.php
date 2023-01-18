<?php
session_start();
include "../model/connection.php";
include "../model/read.php";
include('../functions.php');

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Popcorn Ticket </title>
  <link rel="stylesheet" href="Popcorn_Ticket.css">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton:400">
</head>
<body>
<div class="popcorn">
      <p>Popcorn Ticket</p>
      <img class="imgpop" src="images/popcornticket.gif">
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
  <script>
    // Fonction de téléchargement du PDF
    function downloadPDF() {
      // Convertir le contenu de la page en PDF
      html2pdf().from(document.body).save("TicketPopcornGratuit.pdf");
    }
    // Télécharger le PDF dès que la page est chargée
    //downloadPDF();
    // Rediriger l'utilisateur vers la page de redirection
    //window.location.replace('commande-réussie.php');
  </script>    
</body>