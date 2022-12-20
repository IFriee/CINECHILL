<?php



//________________________________LOGIN/REGISTER VERIF_____________________

function Afficher($string){
  echo $string;
}

function comparer_mdp($mdp1, $mdp2){
  if ($mdp1 == $mdp2){
    return true;
  }
  $_SESSION['erreur'] = "Les mots de passes ne correspondent pas";
  return false;
}

function Verifier_mdp($mdp){

  $upper_case = '/[A-Z]/';
  $lower_case = '/[a-z]/';
  $digital = '/\d/';
  $special = '/\W/';
  $erreur_contenu_mdp = "le mdp doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial";
  $erreur_taille_mdp = "le mot de passe doit faire au minimum 8 caractères";
  $erreur_mdp_verify = "les deux mots de passe doivent être les mêmes";

  if ($mdp == $_POST['password_verify']){
    if (preg_match($lower_case, $mdp)){
      if (preg_match($digital, $mdp)){
        if (preg_match($special, $mdp)){
          if (preg_match($upper_case, $mdp)){
            if (strlen($mdp) >= 8){
              return true;
            } else {
              $_SESSION['erreur'] = $erreur_taille_mdp;
            }
          } else {
            $_SESSION['erreur'] = $erreur_contenu_mdp;
          }
        } else {
          $_SESSION['erreur'] = $erreur_contenu_mdp;
        }
      } else {
        $_SESSION['erreur'] = $erreur_contenu_mdp;
      }
    } else {
      $_SESSION['erreur'] = $erreur_contenu_mdp;
    }
  } else {
    $_SESSION['erreur'] = $erreur_mdp_verify;
  }
  return false;
}

function Verifier_nom_prenom($nom, $prenom){
  $upper_case = '/[A-Z]/';
  $digital = '/\d/';
  $erreur = "Le nom et le prenom doivent contenir une majuscule au début et ne pas contenir das nombres";
  if (preg_match($upper_case, $nom[0]) && preg_match($upper_case, $prenom[0])){
    if (!preg_match($digital, $nom) && !preg_match($digital, $prenom)){
      return true;
    }
  }
  $_SESSION['erreur'] = $erreur;
  header('Location: ../view/page_inscription.php');
  exit();
}

function Verifier_date_naissance($date_naissance){
  $erreur_age = "La date est incorrect";
  
  try {
    Check_date_exception($date_naissance);
  } catch (Exception $e){
    $_SESSION['erreur'] = $e->getMessage();
    return false;
  }

  $date_explode = explode('-', $date_naissance);
  $date_actuelle = explode('-', date('Y-m-d'));

  if ($date_explode[0] < $date_actuelle[0]) {
    return true;
  } else {
    $_SESSION['erreur'] = $erreur_age;
    return false;
  }
}

function Check_date_exception($date) {
  $exception = DateTime::createFromFormat('Y-m-d', $date);
  if($exception === false) {
    throw new Exception("Le format de la date est incorrect");
  }
  return true;
}

function verifier_email($email){
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  } else {
      $_SESSION['erreur'] = "L'email est invalide";
      return false;
    }
}


//________________________________HISTORIQUE COMMANDE ET PETIT SCRIPTS_____________________

function point_de_fidelite($fidelite_user){
// 1 pt de fidel = 1 euros, à 100 points 1 place gratuite
// faire un champ prix par projection / dans la table projection 


}


function nbr_film($nbr_total){
  //return nombre TOTAL de film déja vu
  $nbr_total = 42;
  return $nbr_total;
  
}


function nbr_place_achete(){
  //return nombre TOTAL de place acheté
}




?>