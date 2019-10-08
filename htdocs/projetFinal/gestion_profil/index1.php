

<?php
$bdname = "sonatrach";
$user = "root";
$pass = "";
$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass);
session_start();
if(isset($_POST['sub'])) {
	if(!empty($_POST['Nom_utilisateur']) AND !empty($_POST['mot_de_passe'])) {
		$Nom_utilisateur = $_POST['Nom_utilisateur'];
		$mot_de_passe = $_POST['mot_de_passe'];

		$requete = $bdd->prepare("SELECT * FROM inscription WHERE Nom_utilisateur = ?");
		$requete->execute(array($Nom_utilisateur));
		$existe = $requete->rowCount();

		if($existe == 1) {
			$info = $requete->fetch();
			if($mot_de_passe == $info['motdepasse']) {
				$_SESSION['id'] = $info['id'];
				
				if($info['activite']=="juridique"){
				header("Location: juridique\index_fichier_entré.php");
			}
			elseif($info['activite']=="plf"){
				header("Location: plf\index_fichier_entré.php");
			}
			elseif($info['activite']=="rhemploi"){
				header("Location: rhemploi\index_fichier_entré.php");
			}
			elseif($info['activite']=="NPT"){
				header("Location: NPT\index_fichier_entré.php");
			}
				elseif($info['activite']=="rhformation"){
				header("Location: rhformation\index_fichier_entré.php");
			}
				elseif($info['activite']=="passation-marche"){
				header("Location: passation-marche\index_fichier_entré.php");
			}
			elseif($info['activite']=="suivi_contrat"){
				header("Location: suivi_contrat\index_fichier_entré.php");
			}
		}
	}
}}

?>
<!DOCTYPE html>

<html>
<head>
<title>SONATRACH</title>
<meta charset="utf-8">


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="fl_right">
         </div>
  
  </div>
</div>

<div class="wrapper row1" style=" background-color:#E6E6E6;color:#000000;">
  <header id="header" class="hoc clear"> 

    <div id="logo" class="fl_left"  >
      <h1 style="height: 60%;z-index:1000; font-size:50px; font-family:Georgia, 'Times New Roman', Times, serif;"><a href="index.html">Sonatrach</a></h1>
      <p style="height: 60%;z-index:1000; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;"> la division forage </p>
    </div>

  
  </header>
</div>


<br><br><br>
<div class="row" align="center">
	<div class="col-sm-3"></div>
	<div class="col-sm-6" style="text-align: center;background-position: center;;position: center;">
<div align="center">
		<h2 class="titre" style="text-align: center">  CONNEXION</h2>
<form method="post">
<div class="col-sm-2"></div>

<div class="col-sm-8"><hr></div>
<div class="col-sm-12"></div>
<div class="col-sm-3"></div>

			<div class="col-sm-6">
				<input type="text" name="Nom_utilisateur" placeholder="Nom d'utilisateur" class="form-control">
			</div>

			<div class="col-sm-12"></div>
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
			<br>
				<input type="password" name="mot_de_passe" placeholder="Mot de passe" class="form-control">
			</div>

			<div class="col-sm-12"></div>
			<div class="col-sm-4"></div>
			<div class="col-sm-3">
			<br>	<button type="submit" name="sub" class="btn btn-default valider btn-block">connexion</button>
			</div>
			<div class="col-sm-3"></div>

		</form>
		
</div>
	</div>
</div>

<br><br><br>


<br>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

<script src="layout/scripts/jquery.placeholder.min.js"></script>

</body>
</html>

