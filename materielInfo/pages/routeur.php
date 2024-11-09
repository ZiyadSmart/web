<?php
	if(isset($_GET['route']))  {
        // Vérifie qu'un fichier avec  le  nom $_GET['route'] existe
        if(file_exists($_GET['route'] . '.php') == TRUE)
        {
            //  si  c'est le  cas :  on redirige vers $_GET['route']
            header('Location: '.$_GET['route'].".php");
        }

        // sinon on redirige vers la page d'accueil / ou erreur (au choix)
		else
        {
            header("Location: accueil.php");
        }
	} 
    // Si $_GET['route'] n'est pas isset : rediriger vers l'accueil	
    else
    {
        header("Location: accueil.php");
    }

    //  Si le fichier qui comporte le nom de $_GET['route'] n'existe pas, rediriger vers l'accueil


    // Regarder avec ChatGPT pour des idées  de sécurités supplémentaires
?>