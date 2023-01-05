<?php
session_start();
include "../model/connection.php";
include "../model/read.php";
$user = afficher_pseudo_connecte($db);

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Voici votre ticket : </title>
  <link rel="stylesheet" href="pdf.css">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton:400">
</head>
<body>


  <div class="present">
    <h1 class="titre">Votre ticket</h1>
    <p>N'oubliez pas de vous munir de votre ticket imprimé lorsque vous vous rendrez au cinéma.<br> 
    Vous devrez le présenter à l'entrée pour pouvoir entrer dans la salle de cinéma.
</p>








<br><br><br>
<h2 class="decoup">Découpez le</h2>
<p>---------------------------------------------------------------------------------------------------------------------------------------- </p>


</div>
  
    <div class="cardWrap">
  <div class="card cardLeft">
    <h1 >CineChill.</h1>
    <div class="numerocommande">
    <span>n°0000345</span>
    </div>
    <div class="title">
      <h2>Top Gun: Maverick</h2>
      <span>Film</span>
    </div>
    <div class="name">
      <h2><?php echo $user['prenom_user']." ".$user['nom_user'];?></h2>
      <span>Nom</span>
    </div>
    <div class="seat">
      <h2>156</h2>
      <span>siege</span>
    </div>
    <div class="time">
      <h2>12:00</h2>
      <span>heure</span>
    </div>
    <div class="room">
        <h2>3</h2>
        <span>Salle</span>
    </div>
    <div class="date">
      <h2>03/07</h2>
      <span>date</span>
    </div>
    
  </div>
  <div class="card cardRight">
    <div class="eye"><b>CC.</b></div>
    <div class="number">
      <h3>156</h3>
      <span>siege</span>
    </div>
    <div class="salle">
      <h2>4</h2>
      <span>salle</span>
    </div>

  </div>

</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
  <script>
    // Fonction de téléchargement du PDF
    function downloadPDF() {
      // Convertir le contenu de la page en PDF
      html2pdf().from(document.body).save();
    }
    // Télécharger le PDF dès que la page est chargée
    downloadPDF();
    // Rediriger l'utilisateur vers la page de redirection
    //window.location.replace('commande-réussie.php');
  </script>
</body>
</html>

