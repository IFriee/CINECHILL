<?php 
include('connection.php');


function update_fideliteadd_user($db, $fidelite_user, $nb_place) {
    $query = "UPDATE user_tab  
              SET fidelite_user = (:fidelite_user)
              WHERE id_user = (:id)";
    $query_params = array(':fidelite_user'=>($fidelite_user+($nb_place*5)),
                          ':id'=>$_SESSION['id_user']);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}

function update_place_count($db, $projection, $nb_left_place, $nb_place) {
    $query = "UPDATE place_count_tab  
              SET left_place_count = (:place)
              WHERE fk_projection_place_count = (:projection)";
    $query_params = array(':place'=>($nb_left_place-$nb_place),
                          ':projection'=>$projection);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}

function update_payement($db, $id, $paymentType, $cardNumber, $expirationDate, $securityCode) {
    $query = "UPDATE payement_tab  
              SET  type_payement = (:type_payement), numero_payement = (:numero_payement), date_expi_payement = (:date_expi_payement), 
                          code_payement = (:code_payement)
              WHERE fk_user_payement = (:fk_user_payement)";
    $query_params = array(':type_payement'=>$paymentType,
                          ':numero_payement'=>$cardNumber,
                          ':date_expi_payement'=>$expirationDate,
                          ':code_payement'=>$securityCode,
                          ':fk_user_payement'=>$id);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}
?>