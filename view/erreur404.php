<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Erreur 404</title>
  <link rel="stylesheet" href="erreur404.css">

</head>
<body>
    
    <div class="container">
        <br><br><br>
        <h1>Erreur <a>404</a></h1>
        <br><br>

        <h2>La page que vous cherchez est introuvable</h2>
        <p> (Ou bien Eliott et Louis ont eux la flemme de faire cette fonctionnalité)</p>
        <p><a href="Accueil.php">Revenir au site </a></p>
        <br><br><br>
        <h4>du coup on vous a fais pour nous escuser un petit jeu du pendu  ;)</h4>
        <button onclick="afficherMot()">Afficher le mot</button>

        <p id="mot" style="display: none;">Mot à deviner : </p>

        <script>
        function afficherMot() {
            document.getElementById('mot').style.display = 'block';
        }
        </script>
        <form>
        <label for="lettre">Entrez une lettre :</label>
        <input type="text" name="lettre" id="lettre" maxlength="1">
        <input type="button" value="Valider" onclick="jouer()">
        </form>
        <p id="resultat">Mot : </p>
        <p id="coups">Nombre de coups restants : 8</p>
        <script>
        
            const mots = ['cinechill', 'eliott'];
            let mot = mots[Math.floor(Math.random() * mots.length)];
            let motAffiche = '';
            let coupsRestants = 8;
            let lettresTrouvees = [];

            for (let i = 0; i < mot.length; i++) {
            motAffiche += '-';
        }

        document.getElementById('mot').textContent += mot;
        document.getElementById('resultat').textContent += motAffiche;

        function jouer() {
        const lettre = document.getElementById('lettre').value;
        if (lettresTrouvees.includes(lettre)) {
            alert('Vous avez déjà essayé cette lettre');
            return;
        }
        lettresTrouvees.push(lettre);

        if (mot.includes(lettre)) {
            for (let i = 0; i < mot.length; i++) {
            if (mot[i] === lettre) {
                motAffiche = motAffiche.substring(0, i) + lettre + motAffiche.substring(i + 1);
            }
            }
            document.getElementById('resultat').textContent = 'Mot : ' + motAffiche;
            if (!motAffiche.includes('-')) {
            alert('Bravo, vous avez gagné !');
            }
        } else {
            coupsRestants--;
            document.getElementById('coups').textContent = 'Nombre de coups restants : ' + coupsRestants;
            if (coupsRestants === 0) {
            alert('Désolé, vous avez perdu !');
            }
        }
        }
    </script>
  </div>
</body>
</html>

