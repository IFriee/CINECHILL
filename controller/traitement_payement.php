<?php
session_start();
include('../functions.php');
include('../model/connection.php');
include('../model/read.php');

//========================Modalité payement==================

function checkpayement() {
  $password = $_POST['password'];
  $paymentType = $_POST['paymentType'];
  $cardNumber = $_POST['cardNumber'];
  $expirationDate = $_POST['expirationDate'];
  $securityCode = $_POST['securityCode'];

  // Vérifier que le mot de passe est correct
  if ($password != 'mdp123') {
    return 'Le mot de passe est incorrect';
  }

  // Vérifier le type de carte de paiement
  if (!in_array($paymentType, ['Visa', 'Mastercard', 'American Express'])) {
    return 'Type de carte de paiement non valide';
  }

  // Vérifier le numéro de carte de paiement
  if (!preg_match('/^\d{4} \d{4} \d{4} \d{4}$/', $cardNumber)) {
    return 'Numéro de carte de paiement non valide';
  }

  // Vérifier la date d'expiration
  if (!preg_match('/^\d{2}\/\d{4}$/', $expirationDate)) {
    return "Date d'expiration non valide";
  }

  // Vérifier le code de sécurité
  if (!preg_match('/^\d{3}$/', $securityCode)) {
    return 'Code de sécurité non valide';
  }

  // Si toutes les vérifications ont réussi, retourner un message de succès avec une probabilité de 50%
  return (rand(0, 1) == 0) ? 'Mise à jour des modalités de paiement réussie' : 'Echec de la mise à jour des modalités de paiement';
}




?>