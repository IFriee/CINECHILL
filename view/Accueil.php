<?php 
session_start();
include "../model/connection.php";
include "../model/read.php";

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="COMING SOON">
    <meta name="description" content="">
    <title>Accueil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "CINECHILL",
		"logo": "images/Plandetravail1.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
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
        </nav><span class="u-hover-feature u-icon u-text-palette-2-base u-icon-1" data-href="


        ../controller/if_connect.php" 


        
        title="Espace client"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55 55" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b948"></use></svg><svg class="u-svg-content" viewBox="0 0 55 55" x="0px" y="0px" id="svg-b948" style="enable-background:new 0 0 55 55;"><path d="M55,27.5C55,12.337,42.663,0,27.5,0S0,12.337,0,27.5c0,8.009,3.444,15.228,8.926,20.258l-0.026,0.023l0.892,0.752
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
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="sec-8b61" data-image-width="1400" data-image-height="700" data-target="_blank">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1"> Space Jam (1996)</h2>
        <p class="u-large-text u-text u-text-variant u-text-2">Pour les fans de Space Jam, une rediffusion spéciale sera prévue le 30.01.23</p>
        <div class="u-countdown u-countdown-1" data-target-date="Mon, 30 Jan 2023 05:05:01 GMT" data-type="to-date" data-for="everyone" data-time-left="90d" data-timer-id="dfea" data-target-number="100" data-direction="down" data-start-time="Fri, 16 Dec 2022 16:34:56 GMT" data-frequency="10s" data-after-count="none" data-redirect-url="https://">
          <div class="u-countdown-wrapper u-spacing-40">
            <div class="u-countdown-item u-countdown-years u-hidden u-spacing-15 u-countdown-item-1">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-1"><div class="u-countdown-number">0</div><div class="u-countdown-number u-hidden">0</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-1">Years</div>
            </div>
            <div class="u-countdown-separator u-hidden u-countdown-separator-1"></div>
            <div class="u-countdown-days u-countdown-item u-spacing-15 u-countdown-item-2">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-2"><div class="u-countdown-number">4</div><div class="u-countdown-number">4</div><div class="u-countdown-number u-hidden">0</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-2">Days</div>
            </div>
            <div class="u-countdown-separator u-countdown-separator-2"></div>
            <div class="u-countdown-hours u-countdown-item u-spacing-15 u-countdown-item-3">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-3"><div class="u-countdown-number">1</div><div class="u-countdown-number">2</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-3">Hours</div>
            </div>
            <div class="u-countdown-separator u-countdown-separator-3"></div>
            <div class="u-countdown-item u-countdown-minutes u-spacing-15 u-countdown-item-4">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-4"><div class="u-countdown-number">2</div><div class="u-countdown-number">9</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-4">Minutes</div>
            </div>
            <div class="u-countdown-separator u-countdown-separator-4"></div>
            <div class="u-countdown-item u-countdown-seconds u-spacing-15 u-countdown-item-5">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-5"><div class="u-countdown-number">4</div><div class="u-countdown-number">9</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-5">Seconds</div>
            </div>
            <div class="u-countdown-separator u-hidden u-countdown-separator-5"></div>
            <div class="u-countdown-item u-countdown-numbers u-hidden u-spacing-15 u-countdown-item-6">
              <div class="u-countdown-counter u-spacing-2 u-countdown-counter-6"><div class="u-countdown-number">0</div><div class="u-countdown-number">0</div><div class="u-countdown-number">1</div><div class="u-countdown-number">0</div><div class="u-countdown-number">0</div></div>
              <div class="u-countdown-label u-text-grey-50 u-countdown-label-6">Items</div>
            </div>
          </div>
          <div class="u-countdown-message u-hidden">
            <p>Sorry, the time is up.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-section-2" id="sec-3268">
      <div class="u-align-center u-container-style u-expanded-width u-grey-80 u-group u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h1 class="u-text u-text-default u-text-palette-2-base u-text-1">ALERTE SITE FACTICE</h1>
          <p class="u-text u-text-2">Ce site n'est pas fonctionnel, pour plus d'info :</p>
          <a href="à-propos.php" class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1">Cliquez ici</a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-white u-section-3" id="sec-097b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-1">Choisissez votre film ci-dessous</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-white u-section-4" id="sec-0654">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-1" data-href="../controller/traitement_page_film.php?id_film=2" data-image-width="1000" data-image-height="1482" title="films">
              <div class="u-container-layout u-similar-container u-container-layout-1"></div>
            </div>
            <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-2" data-href="../controller/traitement_page_film.php?id_film=3" data-image-width="1200" data-image-height="1500" title="films">
              <div class="u-container-layout u-similar-container u-container-layout-2"></div>
            </div>
            <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-3" data-image-width="1080" data-image-height="1600">
              <div class="u-container-layout u-similar-container u-container-layout-3"></div>
            </div>
            <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-4" data-image-width="1000" data-image-height="1482">
              <div class="u-container-layout u-similar-container u-container-layout-4"></div>
            </div>
            <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-5" data-image-width="1200" data-image-height="1200">
              <div class="u-container-layout u-similar-container u-container-layout-5"></div>
            </div>
            <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-6" data-image-width="800" data-image-height="1200">
              <div class="u-container-layout u-similar-container u-container-layout-6"></div>
            </div>
            <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-7" data-image-width="1000" data-image-height="1481">
              <div class="u-container-layout u-similar-container u-container-layout-7"></div>
            </div>
            <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-8" data-image-width="714" data-image-height="1113">
              <div class="u-container-layout u-similar-container u-container-layout-8"></div>
            </div>
            <div class="u-container-style u-image u-list-item u-repeater-item u-shading u-image-9" data-image-width="1000" data-image-height="1410">
              <div class="u-container-layout u-similar-container u-container-layout-9"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-5" id="sec-13e0">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Besoin d'aide ?</h1>
        <p class="u-text u-text-2">Toute les infos sont sur la page F.A.Q.</p>
        <a href="faq.php" class="u-btn u-btn-rectangle u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-0 u-btn-1">Cliquez ici</a>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-f4a6"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Owned by Eliott (IFriee) Wengler &amp; Louis (Thejazzman) Coppens<br>
        </p>
      </div></footer>
  
</body></html>