<!DOCTYPE html>
<html lang="fr">
	<?php require_once("head.php") ?>
	<body>
		<header>		
			<h1>Administration</h1>
		</header>
		<?php require_once("nav.php") ?>
		<?php require_once("footer.php") ?>
		<p>			
			<?php			
			//if (isset($_SESSION['isLogin']))
			if(isset($_SESSION['isLogin']))
			{
				echo '<h2> Deconnectez vous </h2>';
				echo '<br/><br/>';
				echo '<form action="../php/deconnexion.php" method="GET">';
					echo '<label>Deconnexion : </label>';
					echo '<input type="submit" value="Envoyer"/>';
				echo '</form>';
			}
			else
			{
				echo '<h2> Connectez vous </h2>';
				echo '<br/><br/>';
				echo '<form action="../php/connexion.php" method="GET">';
					echo '<label>Connexion : </label>';
					echo '<input type="text" name="inputlogin" value="admin"/>';
					echo '<input type="submit" value="Envoyer"/>';
				echo '</form>';
			}?> 	
		</p>

	</body>
</html>