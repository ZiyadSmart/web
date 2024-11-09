<?php
    /*Ce fichier devait être appeler dans description, pour savoir sur quelle bouton l'utilisateur à clic, mais 
    faire appele à ce fichier php contraint à recharger la page, donc rend l'ajax inutile */
    if (isset($_FILES['inputphoto']) && isset($_POST['inputdescription']))
    {
        move_uploaded_file($_FILES['inputphoto']['tmp_name'], '../IMGViewer/' . basename($_FILES['inputphoto']['name']));
        echo "L'envoi a bien été effectué !";

        header("Location: ./insert_BDD.php?inputphoto=".$_FILES['inputphoto']['name']."&inputdescription=".$_POST['inputdescription']);
    }
    else
    {
        echo "ERREUR, veiller à remplir la description et mettre une photo";
    }
?>
