<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>
			<div class="sucess">
				<h1 class="titreblog">Bienvenue sur NI2RAT <?php echo $_SESSION['username']; ?></h1>
					<h2>Voici 3 astuce pour devenir de vrai rat. </h2>
		
		<ul class="lien">
		  <a href="index.php?page=Voiture"><h3>En voiture</h3></a>
		  <a href="index.php?page=Resto"><h3>Au resto</h3></a>
		  <a href="index.php?page=Lavage"><h3>Lavage</h3></a>
		</ul>
			</header>
		<div class="principal">
	<?php
		if(isset($_GET['page']))
		 {
			if($_GET['page'] == "Voiture") 
			{
				include("Voiture.php");
			}

		else  if ($_GET['page'] == "Resto")
			{
				include("Resto.php");
			}
		else  if ($_GET['page'] == "Lavage") 
			{
				include("Lavage.php");	
			}
			}
		else{
			include("Voiture.php");

	}
?>
</div>
	</body>
		<footer>
		</br><a class="deco" href="logout.php"><h3>Déconnexion</h3>
		</a>
		</footer>
</html>