<nav>
    
    <?php session_start();
    if (isset($_SESSION['isLogin']))
	{
		echo '<a href="routeur.php?route=accueil"> Accueil </a>';
        echo '<a href="routeur.php?route=description"> Description </a>';
        echo '<a href="routeur.php?route=contact"> Contact </a>';
        echo '<a href="routeur.php?route=editer"> Editer </a>';
        echo '<a href="routeur.php?route=administration"> Deconnexion </a>';   
	}
    
    else
    {
        echo '<a href="routeur.php?route=accueil"> Accueil </a>';
        echo '<a href="routeur.php?route=description"> Description </a>';
        echo '<a href="routeur.php?route=contact"> Contact </a>';
        echo '<a href="routeur.php?route=administration"> Connexion </a>';
    }
    ?>
</nav>
