<?php
    require_once("bdd_ids.php");
    
    // Préparer la requête SQL pour la modification
    $req = "DELETE FROM image WHERE nominage = ?";
    $stmt = $mysqli->prepare($req);

    // Vérifier que la préparation a réussi
    if ($stmt === false) 
    {
        die("Erreur lors de la préparation : " . $mysqli->error);
    }

    // Liaison des paramètres à la requête préparée
    $stmt->bind_param("s", $inputphoto);
    
    // Remplacer les valeurs par les variables correspondantes

    $inputphoto = $_GET['inputphoto'];
    
    // Exécution de la requête
    if ($stmt->execute())
    {
        echo "Données supprimer avec succès";
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