<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learning";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['enrg'])){
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$password = md5($_POST['pwd']);
	$datec = date("Y/m/d");
	

$sql = "INSERT INTO user (nom, email, password,datec)
VALUES ('$nom', '$email','$password',$datec)";

if (mysqli_query($conn, $sql)) {
  echo "<b><font color = '#34FA11'>un compte a été créé avec succès</font><b>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

} else {
	echo " <b><font color='red'>Saisir les informations de l utilisateur</font></b>" ;
}

mysqli_close($conn);
?>

<?php 

session_start();

 ?>
<html lang="fr">
<head>
		<title>INSCRIPTION</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style2.css">
</head>
<body>
		           		<div class="enc">
					      <form action=" " method="POST" class="form">
							<div class="row">
                               
									<div class="row">
										<div class="col">
											<label for=""><h3>INSCRIPTION</h3></label>
											<input type="nom" class="form-control" placeholder="Votre nom" name="nom" required>
											
										</div>
									</div>
							</div>
							<div class="row">
                               
									<div class="row">
										<div class="col">
											<label for="nom"></label>
											<input type="email" class="form-control" placeholder="Votre Email" name="email" required>
										</div>
									</div>
							</div>
							<div class="row">
							<div class="row">
								  <div class="col">
									<label for="password"></label>
									<input type="password" class="form-control" id="pwd" placeholder="Votre mot de passe" name="pwd" required>
								  </div>
							</div>
							<div class="row">
							  <div class="col">
							  <button type="submit" class="button" value="enrg" name="enrg" ><a href="#"><font color="white">S'enregistrer</font></a></button>								
							  </div>     
							</div>
							<h2 style="color: black; font-size: 15px; ">
								<br><br>Vous avez déja un compte ?<a href="http://localhost/learn/ecole/index.php"> cliquez ici</a>
							</h2>
                      </form>
					</div>
					</div>  
   </body>
</html> 


