<?php			
	/************************
	BDD Acces
	************************/
	if(isset($_GET["inputlogin"])){
		require_once("bdd_ids.php");
		
		// BDD request
		$req = "SELECT * FROM administrateur WHERE login = ?";
		$stmt = $mysqli -> prepare($req);
		$stmt -> bind_param("s", $_GET["inputlogin"]);
		$stmt -> execute();
		$result = $stmt->get_result();

		echo $req."<br/>";
		if ($result -> num_rows != 0){
			
			//echo "Returned rows are: " . $result -> num_rows;
			//while ($obj = $result -> fetch_object()) {
			//	echo("<div>Utilisateur : ".$obj->login."</div>");
			//}
			
			$result -> free_result();
			$mysqli -> close();
			
			session_start();
			header("Location: ../pages/editer.php");
		
			$_SESSION['isLogin'] = true;
		}else{
			$mysqli -> close();
			header("Location: ../pages/administration.php");
		}

		
	}
?>			