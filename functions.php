<?php


//________________________________LOGIN/REGISTER VERIF_____________________

function Afficher($string){
  echo $string;
}

function comparer_mdp($mdp1, $mdp2){
  if ($mdp1 == $mdp2){
    unset($_SESSION['erreur']);
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
              unset($_SESSION['erreur']);
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
  $erreur = "Le nom et le prenom doivent contenir une majuscule au début et ne pas contenir des nombres";
  if (preg_match($upper_case, $nom[0]) && preg_match($upper_case, $prenom[0])){
    if (!preg_match($digital, $nom) && !preg_match($digital, $prenom)){
      unset($_SESSION['erreur']);
      return true;
    }
  }
  $_SESSION['erreur'] = $erreur;
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
    unset($_SESSION['erreur']);
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
    unset($_SESSION['erreur']);
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

function menu_film($db){
  $nom_film = read_nom_film($db);
  for($i = 1; $i <= count($nom_film); $i++){
    echo "<option value='".$i."'>".$nom_film[$i-1]["nom_film"]."</option>";
  }
  return $nom_film;
}

function menu_salle($db){
  $id_salle = read_id_salle($db);
  for($i = 1; $i <= count($id_salle); $i++){
    echo "<option value='".$i."'>".$id_salle[$i-1]["id_salle"]."</option>";
  }
  return $id_salle;
}

function menu_projection($db, $id){
  $projection = read_projection($db, $id);
  for($i = 1; $i <= count($projection); $i++){
    $year = substr($projection[$i-1]["horraire_projection"], 0, 4);
    $month = substr($projection[$i-1]["horraire_projection"], 5, 2);
    $day = substr($projection[$i-1]["horraire_projection"], 8, 2);
    $hour = substr($projection[$i-1]["horraire_projection"], 11, 2);
    $minute = substr($projection[$i-1]["horraire_projection"], 14, 2);
    $horaire = $day."/".$month."/".$year." ".$hour.":".$minute;


    echo "<option value='".$projection[$i-1]["id_projection"]."'>".$horaire." salle ".$projection[$i-1]["fk_salle_projection"]." </option>";
  }
  return $projection;
}




// fonction de format date et heure


function menu_historique_commande($db, $id){
  $historique = read_info_commande($db, $id);
  
  
  foreach ($historique as $value) {
      echo '<tr style="height: 51px;">
              <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$value['nom_film'].'</td>
              <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$value['nombre_place_commande'].'</td>
              <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.($value['nombre_place_commande']*5).'</td>
              <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">';date_format_fr($value['date_commande']); echo '</td>
              <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">'.$value['nombre_place_commande']*$value['prix_ticket_projection'].' €</td>
            </tr>';
  }
}


function date_format_fr($date){
  $year = substr($date, 0, 4);
  $month = substr($date, 5, 2);
  $day = substr($date, 8, 2);
  $date_format = $day."/".$month."/".$year;
  echo $date_format; 
}

function date_format_hour($date){
  $hour = substr($date, 11, 2);
  $minute = substr($date, 14, 2);
  $hour_format = $hour.":".$minute;
  echo $hour_format;
  
}

//-------------------------------------------------------------------------------

function conversion_string_heure($duree_film){
  $hour = substr($duree_film['duree_film'], 0, 2);
  $minute = substr($duree_film['duree_film'], 3, 2);
  return (strtotime("+ ".$hour." hours ".$minute." minutes") - strtotime("now")) + 15;
}
?>