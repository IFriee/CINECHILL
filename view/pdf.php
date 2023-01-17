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
  <title>Bon de commande </title>
  <link rel="stylesheet" href="pdf.css">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton:400">
</head>
<body>
  <img class="imglogo"src="images/Plandetravail1.png" class="u-logo-image u-logo-image-1">

  <div class="present">
    <h1 class="titre">Bon de commande</h1>

<div class="resumcommande">
  <h3 style="text-align:center">Résumé de votre commande</h3>
  <h4>Information client</h4>
  <p>Numéro de commande : <b><?=$_SESSION['info_commande']['id_commande']?></b></p>
  <p>Nom: <b><?=$_SESSION['user_info']['nom_user'] ?></b></p>
  <p>Prénom: <b><?=$_SESSION['user_info']['prenom_user'] ?></b></p>
  <p>Email: <b><?=$_SESSION['user_info']['mail_user']?></b></p>
  <p>Points de fidelité total: <b><?=$_SESSION['user_info']['fidelite_user']?></b></p>
  <br>
  <h4>Film réservé</h4>
  <p>Nom du film : <b><?=$_SESSION['info_reservation']['nom_film']?></b></p>
  <p>Date de projection : <b><?=date_format_fr($_SESSION['info_reservation']['horraire_projection'])?></b></p>
  <p>Heure de projection : <b><?=date_format_hour($_SESSION['info_reservation']['horraire_projection'])?></b></p>
  <p>Salle de projection : <b><?=$_SESSION['info_reservation']['fk_salle_projection']?></b></p>
  <p>Prix de la place : <b><?=$_SESSION['info_reservation']['prix_ticket_projection']?> €</b></p>
  

</div>

<p style="color:#db545a;size:1em ">N'oubliez pas de vous munir de votre ticket imprimé lorsque vous vous rendrez au cinéma.<br> 
    Vous devrez le présenter à l'entrée pour pouvoir entrer dans la salle de cinéma.
</p>

<p class="decoup">Découpez le ticket ci dessous</p>
<p>---------------------------------------------------------------------------------------------------------------------------------------- </p>


</div>
  
    <div class="cardWrap">
  <div class="card cardLeft">
    <h1 >CineChill.</h1>
    <div class="numerocommande">
    <span>n°0000<?=$_SESSION['info_commande']['id_commande']?></span>
    </div>
    <div class="title">
      <h2><?php echo $_SESSION['info_reservation']['nom_film'] ?></h2>
      <span>Film</span>
    </div>
    <div class="name">
      <h2><?php echo $_SESSION['user_info']['prenom_user']." ".$_SESSION['user_info']['nom_user'];?></h2>
      <span>Nom</span>
    </div>
    <div class="seat">
      <h2>156</h2>
      <span>siege</span>
    </div>
    <div class="time">
      <h2><?=date_format_hour($_SESSION['info_reservation']['horraire_projection'])?></h2>
      <span>heure</span>
    </div>
    <div class="date">
        <h2><?=date_format_fr($_SESSION['info_reservation']['horraire_projection'])?></h2>
        <span>Date</span>
    </div>
    <div class="room">
      <h2><?=$_SESSION['info_reservation']['fk_salle_projection']?></h2>
      <span>Salle</span>
    </div>
    
  </div>
  <div class="card cardRight">
    <div class="eye"><b>CC.</b></div>
    <div class="number">
      <h2><?=$_SESSION['info_reservation']['fk_salle_projection']?></h2>
      <span>SALLE</span>
    </div>
    <div class="place">
      <h3><?=$_SESSION['info_reservation']['nombre_place_commande']?></h3>
      <span>place(s)</span>
    </div>

  </div>

</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
  <script>
    // Fonction de téléchargement du PDF
    function downloadPDF() {
      // Convertir le contenu de la page en PDF
      html2pdf().from(document.body).save("place_cinechill.pdf");
    }
    // Télécharger le PDF dès que la page est chargée
    downloadPDF();
    // Rediriger l'utilisateur vers la page de redirection
    //window.location.replace('commande-réussie.php');
  </script>
</body>
</html>

