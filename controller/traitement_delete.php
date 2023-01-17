<?php
session_start();
include "../model/read.php";
include ("../model/delete.php");


//verification si id user existe et delete si true
if (isset($_POST['user-id'])){
  delete_user($db, $_POST['user-id']);
}


//verification si id projection existe et delete si true
if (isset($_POST['id_projection'])){
  $if_exist = read_commande_from_projection($db, $_POST['id_projection']);
  if($if_exist[0] == NULL){
    delete_projection($db, $_POST['id_projection']);
  }
  $_SESSION['message'] = "une ou plusieurs commande(s) existe(ent) pour cette projection ou elle n'existe pas";
  header("Location: ../view/admin.php");
  exit();
}
?>