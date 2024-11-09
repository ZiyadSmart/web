<!DOCTYPE html>
<html lang="fr">
	<?php require_once("head.php") ?>
	<body onload="loadBDD()">
		<header>		
			<h1>Description</h1>
		</header>
		<?php require_once("burger_menu.php") ?>	
		<?php require_once("nav.php") ?>
		
		
		<main>
			<div id="myDiv1"></div>
			<script>
			function loadBDD() {
				var xmlhttp = new XMLHttpRequest();
				
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						var tabVals1 = JSON.parse(xmlhttp.responseText);
						
						for (let i = 0; i < tabVals1.length; i++) {
							let nominage = tabVals1[i].nominage;
							let description = tabVals1[i].description;
							
							document.getElementById("myDiv1").innerHTML += `
								<form action="../php/supprimer.php" method="GET">
									<div>
										<img src='../IMGViewer/${nominage}'>
										<input type="hidden" name="inputphoto" value="${nominage}">
										
										<?php 
										if (isset($_SESSION['isLogin'])) {
											echo '<input name="inputdescription" type="text" size="50" value="${description}"></input>';
										} else {
											echo '<p>${description}</p>';
										}
										?>
									</div>
									<div id="button_description">
										<?php 
										if (isset($_SESSION['isLogin'])) {
											//echo '<button type="submit" name="modifier">Modifier</button>';
											echo '<button type="submit" name="supprimer">Supprimer</button>';
										} else {
											echo '<button type="submit" name="ajout"> Contacter </button>';
										}
										?>
									</div>
								</form>
							`;
						}
					}
				};
				
				xmlhttp.open("GET", "../php/request_description.php", true);
				xmlhttp.send();
			}
			</script>
		</main>
		<?php require_once("footer.php") ?>
	</body>
</html>