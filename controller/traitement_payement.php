<?php
session_start();
include('../functions.php');
include('../model/connection.php');
include('../model/read.php');
include('../model/insert.php');
include('../model/update.php');

unset($_SESSION['message_payement']);
$paymentType = $_POST['paymentType'];
$cardNumber = $_POST['cardNumber'];
$expirationDate = $_POST['expirationDate'];
$securityCode = $_POST['securityCode'];


$if_exist = read_payement_tab($db, $_SESSION['id_user']);

if($if_exist['fk_user_payement'] != $_SESSION['id_user']){
  if(payement_verify($db, $_POST['password'], $_SESSION['id_user'])){
    unset($_POST['password']);
    if(checkpayement($_SESSION['id_user'], $paymentType, $cardNumber, $expirationDate, $securityCode)){

      $_SESSION['message'] = 'Mise à jour des modalités de paiement réussie';

      add_payement($db, $_SESSION['id_user'], $paymentType, $cardNumber, $expirationDate, $securityCode);
    }
  } else {
    $_SESSION['message'] = 'mot de passe incorect';
  }
} else {
  update_payement($db, $id, $paymentType, $cardNumber, $expirationDate, $securityCode);
  $_SESSION['message'] = 'Mise à jour des modalités de paiement réussie';
}


header('Location: ../view/Espace-client.php');

?>