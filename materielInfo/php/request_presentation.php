<?php
    require_once("bdd_ids.php");

    // BDD request
		$req = "SELECT presentation FROM accueil";
        $stmt = $mysqli -> prepare($req);
		$stmt -> execute();
		$resultat = $stmt->get_result();

        $myArray = array();
        while($row = $resultat->fetch_assoc()){
            // Créer les balises images du dom  
            $myArray[] = array(
                "presentation" => $row['presentation']);
        }
        $stmt->close();
        $mysqli->close();
        echo json_encode($myArray);
?>

    