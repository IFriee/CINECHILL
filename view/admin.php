<?php
session_start();
include('../model/connection.php');
include ("../model/read.php");
include ("../model/insert.php");
include ("../functions.php");

if ($_SESSION['id_user'] == 1){
  echo 'Mode administrateur';}
else{ 
  header('Location: erreur404.php');
}

if (isset($_SESSION['message'])){
  echo "<script type='text/javascript'>alert('salle occupé');</script>";
  unset($_SESSION['message']);
}

?>











<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>admin</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="admin.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton:400">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "CINECHILL",
		"logo": "images/Plandetravail1.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="admin">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="fr"><header class="u-clearfix u-header u-white" id="sec-fe4e" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Accueil.php" class="u-image u-logo u-image-1" data-image-width="1085" data-image-height="213" title="Accueil">
          <img src="images/Plandetravail1.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-grey-90" href="Accueil.php" style="padding: 10px 0px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-grey-90" href="faq.php" style="padding: 10px 0px;">F.A.Q.</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-2-base u-border-hover-palette-2-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-2-base u-text-grey-90 u-text-hover-grey-90" href="à-propos.php" style="padding: 10px 0px;">A propos</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.php">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="faq.php">F.A.Q.</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="à-propos.php">A propos</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav><span class="u-hover-feature u-icon u-text-palette-2-base u-icon-1" data-href="Espace-client.php" title="Espace client"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55 55" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b948"></use></svg><svg class="u-svg-content" viewBox="0 0 55 55" x="0px" y="0px" id="svg-b948" style="enable-background:new 0 0 55 55;"><path d="M55,27.5C55,12.337,42.663,0,27.5,0S0,12.337,0,27.5c0,8.009,3.444,15.228,8.926,20.258l-0.026,0.023l0.892,0.752
	c0.058,0.049,0.121,0.089,0.179,0.137c0.474,0.393,0.965,0.766,1.465,1.127c0.162,0.117,0.324,0.234,0.489,0.348
	c0.534,0.368,1.082,0.717,1.642,1.048c0.122,0.072,0.245,0.142,0.368,0.212c0.613,0.349,1.239,0.678,1.88,0.98
	c0.047,0.022,0.095,0.042,0.142,0.064c2.089,0.971,4.319,1.684,6.651,2.105c0.061,0.011,0.122,0.022,0.184,0.033
	c0.724,0.125,1.456,0.225,2.197,0.292c0.09,0.008,0.18,0.013,0.271,0.021C25.998,54.961,26.744,55,27.5,55
	c0.749,0,1.488-0.039,2.222-0.098c0.093-0.008,0.186-0.013,0.279-0.021c0.735-0.067,1.461-0.164,2.178-0.287
	c0.062-0.011,0.125-0.022,0.187-0.034c2.297-0.412,4.495-1.109,6.557-2.055c0.076-0.035,0.153-0.068,0.229-0.104
	c0.617-0.29,1.22-0.603,1.811-0.936c0.147-0.083,0.293-0.167,0.439-0.253c0.538-0.317,1.067-0.648,1.581-1
	c0.185-0.126,0.366-0.259,0.549-0.391c0.439-0.316,0.87-0.642,1.289-0.983c0.093-0.075,0.193-0.14,0.284-0.217l0.915-0.764
	l-0.027-0.023C51.523,42.802,55,35.55,55,27.5z M2,27.5C2,13.439,13.439,2,27.5,2S53,13.439,53,27.5
	c0,7.577-3.325,14.389-8.589,19.063c-0.294-0.203-0.59-0.385-0.893-0.537l-8.467-4.233c-0.76-0.38-1.232-1.144-1.232-1.993v-2.957
	c0.196-0.242,0.403-0.516,0.617-0.817c1.096-1.548,1.975-3.27,2.616-5.123c1.267-0.602,2.085-1.864,2.085-3.289v-3.545
	c0-0.867-0.318-1.708-0.887-2.369v-4.667c0.052-0.52,0.236-3.448-1.883-5.864C34.524,9.065,31.541,8,27.5,8
	s-7.024,1.065-8.867,3.168c-2.119,2.416-1.935,5.346-1.883,5.864v4.667c-0.568,0.661-0.887,1.502-0.887,2.369v3.545
	c0,1.101,0.494,2.128,1.34,2.821c0.81,3.173,2.477,5.575,3.093,6.389v2.894c0,0.816-0.445,1.566-1.162,1.958l-7.907,4.313
	c-0.252,0.137-0.502,0.297-0.752,0.476C5.276,41.792,2,35.022,2,27.5z"></path></svg></span>
      </div></header>

    <section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-27bc">

      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-custom-font u-text u-text-default u-text-1">Menu <span class="u-text-palette-2-base">ADMINISTRATEUR</span>
        </h3><br><br>
        
        <div class="u-accordion u-expanded-width u-faq u-spacing-10 u-accordion-1">
        <div class="u-accordion-item" style="text-align: center;">
            <a class="u-accordion-link u-active-white u-button-style u-hover-white u-white u-accordion-link-2" id="link-accordion-72f4" aria-controls="accordion-72f4" aria-selected="false">
              <span  class="u-accordion-link-text"> <h5 class="u-custom-font u-text u-text-default u-text-1"style="text-align: center;"> Acces rapide pages </h5></span>
            </a>
            <div class="u-accordion-pane u-container-style u-white u-accordion-pane-2" id="accordion-72f4" aria-labelledby="link-accordion-72f4">
              <div class="u-container-layout u-container-layout-2">
                <div style="text-align: center;" class="fr-view u-clearfix u-rich-text u-text">
                <a class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1" href="commande-réussie.php" >vers page commande réussie</a><br>
                <a class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1" href="Login.php" >vers page Login</a>
                <a class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1" href="Register.php">vers page Register</a><br>
                <a class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1" href="films.php">vers page film</a>
                <a class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1" href="payement.php" >vers page modalite de payement</a><br>
                <a class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1" href="user_tab.php" >vers page tab users</a>
                <a class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1" href="pdf.php" >vers page pdf</a><br>
                <a class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1" href="order.php" >vers page order</a>
                <a class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1" href="projection_tab.php" >vers page projection tab</a><br>

                    <br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-accordion-item">
            <a class="u-accordion-link u-active-white u-button-style u-hover-white u-white u-accordion-link-2" id="link-accordion-72f4" aria-controls="accordion-72f4" aria-selected="false">
              <span class="u-accordion-link-text"> <h5 class="u-custom-font u-text u-text-default u-text-1"> Gestion FILMS </h5></span>
            </a>
            <div style="text-align: cen
            ter;" class="u-accordion-pane u-container-style u-white u-accordion-pane-2" id="accordion-72f4" aria-labelledby="link-accordion-72f4">
              <div class="u-container-layout u-container-layout-2">
                <div class="fr-view u-clearfix u-rich-text u-text">
                  <h5 class="u-custom-font u-text u-text-default u-text-1">Supprimer affichage film </h5>
                  <form action="/delete-film" method="POST">
                    <label for="film-select">Sélectionnez le film à supprimer :</label><br>
                    <select id="film-select" name="film-select">
                      <option value="film1">Film 1</option>
                      <option value="film2">Film 2</option>
                      <option value="film3">Film 3</option>
                      ...
                    </select><br>
                    <input type="submit" value="Supprimer le film">
                  </form>
                  <br><br>
                  
                  <h5 class="u-custom-font u-text u-text-default u-text-1">Ajouter film </h5>
                  <form action="../controller/add_film.php" method="POST">
                    <label for="film-name">Nom du film :</label><br>
                    <input type="text" id="film-name" name="nom_film"><br>
                    <label for="film-duration">Durée du film :</label><br>
                    <input type="text" id="film-duration" name="duree_film"><br>
                    <label for="film-genre">Genre du film :</label><br>
                    <input type="text" id="film-genre" name="genre_film"><br>
                    <label for="film-image">URL de l'image du film :</label><br>
                    <input type="text" id="film-image" name="image_info_page"><br>
                    <label for="film-video">URL de la vidéo du film :</label><br>
                    <input type="text" id="film-video" name="url_info_page"><br>
                    <label for="film-summary">Résumé du film :</label><br>
                    <input type="text" id="film-video" name="resume_info_page"><br>
                    <label for="film-author">Auteur du film :</label><br>
                    <input type="text" id="film-author" name="auteur_film"><br>
                    <label for="film-release-date">Date de sortie du film :</label><br>
                    <input type="date" id="film-release-date" name="date_sortie_film"><br>
                    <input type="submit" value="Ajouter le film">
                  </form>

                    <br>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-accordion-item">
            <a class="u-accordion-link u-active-white u-button-style u-hover-white u-white u-accordion-link-2" id="link-accordion-72f4" aria-controls="accordion-72f4" aria-selected="false">
              <span class="u-accordion-link-text"><h5 class="u-custom-font u-text u-text-default u-text-1"> Gestion USERS </h5></span>
            </a>
            <div style="text-align: center;" class="u-accordion-pane u-container-style u-white u-accordion-pane-2" id="accordion-72f4" aria-labelledby="link-accordion-72f4">
              <div class="u-container-layout u-container-layout-2">
                <div class="fr-view u-clearfix u-rich-text u-text">
                <form action="/delete-user" method="POST">
                  <label for="user-id">ID de l'utilisateur à supprimer :</label><br>
                  <input type="number" id="user-id" name="user-id"><br>
                  <input type="submit" value="Supprimer l'utilisateur" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">
                </form>
                <a class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1" target="_blank" href="user_tab.php" >Liste d'utilisateur</a>

                    <br>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="u-accordion-item">
            <a class="u-accordion-link u-active-white u-button-style u-hover-white u-white u-accordion-link-2" id="link-accordion-72f4" aria-controls="accordion-72f4" aria-selected="false">
              <span class="u-accordion-link-text"><h5 class="u-custom-font u-text u-text-default u-text-1"> Gestion PROJECTION </h5></span>
            </a>
            <div style="text-align: center;" class="u-accordion-pane u-container-style u-white u-accordion-pane-2" id="accordion-72f4" aria-labelledby="link-accordion-72f4">
              <div class="u-container-layout u-container-layout-2">
                <?php
                $query = "SELECT id_projection, fk_salle_projection, nom_film, horraire_projection, prix_ticket_projection 
                          FROM projection_tab
                          INNER JOIN film_tab ON id_film = fk_film_projection";
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
                  echo "<th>horaire</th>";
                  echo "<th>prix</th>";
                  foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $row["id_projection"] . "</td>";
                    echo "<td>" . $row["fk_salle_projection"] . "</td>";
                    echo "<td>" . $row["nom_film"] . "</td>";
                    echo "<td>" . $row["horraire_projection"] . "</td>";
                    echo "<td>" . $row["prix_ticket_projection"] . " €</td>";
                    echo "</tr>";
                    }
                    echo "</table>";
                    } else {
                    echo "Aucun enregistrement trouvé";
                    }

                ?>

                <style>
                  table {
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

                <div class="fr-view u-clearfix u-rich-text u-text">
                <form action="/delete-user" method="POST">
                  <label for="projection-id">Projection à supprimer :</label><br>
                  <input type="number" id="user-id" name="id_projection" min="1"><br>
                  <input type="submit" value="Supprimer la projection" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">
                </form>

                </form>
                  <br><br>
                  
                  <h5 class="u-custom-font u-text u-text-default u-text-1">Ajouter film </h5>
                  <form action="../controller/add_projection.php" method="POST">
                    <label for="salle_projection">salle de projection :</label><br>
                    <select id="projection-select" name="salle_projection">
                      <?php menu_salle($db); ?>
                    </select><br>
                    <label for="nom_film">nom du film :</label><br>
                    <select id="projection-select" name="id_film">
                      <?php menu_film($db); ?>
                    </select><br>
                    <label for="horraire_projection">horraire :</label><br>
                    <input type="datetime-local" id="projection-horraire" name="horraire_projection"><br>
                    <label for="film-image">prix de la projection :</label><br>
                    <input type="text" id="film-image" name="prix_projection"><br>
                    <input type="submit" value="Ajouter la projection">
                  </form>

                    <br>
                  </p>
                </div>
              </div>
            </div>
          </div>
































  
  </body>
</html>