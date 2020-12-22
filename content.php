<!DOCTYPE html>
<html>
	<head>
	 <link rel="stylesheet" href="style.css" /> 
	
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre espace utilisateur.</p>
		<a href="logout">Déconnexion</a>
		</div>
	</body>
</html>