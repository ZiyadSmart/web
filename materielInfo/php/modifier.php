<?php
    require_once("bdd_ids.php");

    // Préparer la requête SQL pour la modification
    $req = "UPDATE image SET description = ? WHERE nominage = ?";
    $stmt = $mysqli->prepare($req);

    // Vérifier que la préparation a réussi
    if ($stmt === false) 
    {
        die("Erreur lors de la préparation : " . $mysqli->error);
    }

    // Liaison des paramètres à la requête préparée
    $stmt->bind_param("ss", $inputdescription, $inputphoto);
    
    // Remplacer les valeurs par les variables correspondantes

    $inputphoto = $_GET['inputphoto'];
    $inputdescription = $_GET['inputdescription'];
    
    // Exécution de la requête
    if ($stmt->execute())
    {
        echo "Données insérées avec succès";
        header("Location: ../pages/description.php");
    } 
    
    else 
    {
        echo "Erreur lors de l'insertion : " . $stmt->error;
    }

    // Fermer la requête préparée et la connexion
    $stmt->close();
    $mysqli->close();

?>