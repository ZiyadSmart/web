<?php
    require_once("bdd_ids.php");

    // BDD request
		$req = "SELECT adresse, telephone FROM contact";
        $stmt = $mysqli -> prepare($req);
		$stmt -> execute();
		$resultat = $stmt->get_result();

        $myArray = array();
        while($row = $resultat->fetch_assoc()){
            // Créer les balises images du dom  
            $myArray[] = array(
                "adresse" => $row['adresse'], 
                "telephone" => $row['telephone']);
        }
        $stmt->close();
        $mysqli->close();
        echo json_encode($myArray);
?>

    