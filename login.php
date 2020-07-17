<?php 

session_start();

 ?>

<html lang="fr">
<head>
		<title>CONNEXION</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style2.css">
</head>
<body>
                       
	  <div class="rectange">
	  <a href="login.php"><font color="white">Connexion</font></a>/<a href="index.php"><font color="white">Enregistrement</font></a>
	  </div><br>
	                    <div class="enc3">
							<h2>login</h2>
						</div>
                        
		 <div class="container">
		   <div class="logo">
					<img src="logo.png" alt="logo" >
		   </div>
			</div>
	


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

if(isset($_POST['enrg'])){
$email = $_POST['email'];
$pwd = md5($_POST['pwd']);

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pwd' ";
$result = mysqli_query($conn, $sql);





if (mysqli_num_rows($result) > 0) {
  // Save user 
$row = mysqli_fetch_assoc($result);
  $email = $row["email"];
  $nompg = $row["nompg"];
  $id_utilisateur = $row["id"];


  $_SESSION['email'] = $email;
  $_SESSION['nompg'] = $nompg;
  $_SESSION['pwd'] = $pwd;
  $_SESSION['id'] = $id_utilisateur;


  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  Connecté avec succes
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
  </button>
</div>';


//-------- open user page ------------------
	echo '<script language="Javascript">';
		echo 'document.location.replace("./admin1.php")'; // -->
		echo ' </script>';


  
} else {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color:black; width: 30%;margin-top:200px;">
             <font color="white">Erreur: Email ou mot de passe incorrect </font>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         	      <span aria-hidden="true">&times;</span>
             </button>
       </div>';
}





}
mysqli_close($conn);
?>



						<div class="enc2">
							<h2><font color="white">CONNEXION</font></h2>
						</div>
		            <div class="enc">
					  <form action=" " method="POST" class="form">
							<div class="row">
									<div class="row">
										<div class="col">
											<label for="nom">Email :</label>
											<input type="email" class="form-control" placeholder="Votre Email" name="email" required>
										</div>
									</div>
							</div>
							<div class="row">
									<div class="row">
										  <div class="col">
											<label for="nompg">Nom de votre page :</label>
											<input type="text" class="form-control" id="nompg" placeholder="Votre page" name="nompg" required>
										  </div>
									</div>
								
							<div class="row">
								  <div class="col">
									<label for="password">Mot de passe :</label>
									<input type="password" class="form-control" id="pwd" placeholder="Votre mot de passe" name="pwd" required>
								  </div>
							</div>
							<div class="row">
							  <div class="col">
							  <button type="submit" class="button" value="enrg" name="enrg" ><a href="#"><font color="white">Valider</font></a></button>
								<br>
                                <br>								
							  </div>     
							</div>
							<div class="row">
							   <div class="mdp">
							       <a href="#"> <font color="blue"> Mot de passe oublié? </font></a>
							   </div>
							</div>
					  </form>
					</div>
					</div>
          <div class="footer">
            <p>Copyright zokubird</p>
          </div>
   </body>
</html> 

