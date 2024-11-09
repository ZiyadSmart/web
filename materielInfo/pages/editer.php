<!DOCTYPE html>
<html lang="fr">
	
	<?php require_once("head.php") ?>
	<body>
		<header>		
			<h1>ADMINISTRATION</h1>
		</header>
		<?php require_once("burger_menu.php") ?>	
		<?php require_once("nav.php") ?>
			
		<?php
		if (!isset($_SESSION['isLogin'])) 
		{
			header("Location: ../pages/accueil.php");
			exit;
		}
		?>

		<form action="../php/ajout.php" method="POST" enctype="multipart/form-data">
				<label>Ajouter un nouveau texte : </label>
				<input type="text" name="inputdescription" placeholder="description"/>
				<input type="file" name="inputphoto" value="nom de la photo" />

				<input type="submit" value="Envoyer"/>
		</form>	

	</body>
</html>