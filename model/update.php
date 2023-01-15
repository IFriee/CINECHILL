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
?>