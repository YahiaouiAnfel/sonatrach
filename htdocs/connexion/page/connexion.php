<?php

if(isset($_POST['sub'])) {
	if(!empty($_POST['Nom_utilisateur']) AND !empty($_POST['motdepasse'])) {
		$Nom_utilisateur = $_POST['Nom_utilisateur'];
		$motdepasse = $_POST['motdepasse'];

		$requete = $bdd->prepare("SELECT * FROM inscription WHERE Nom_utilisateur = ?");
		$requete->execute(array($Nom_utilisateur));
		$existe = $requete->rowCount();
  
		if($existe == 1) {
			$info = $requete->fetch();

			if($motdepasse == $info['motdepasse']) {
				
				$_SESSION['id'] = $info['id'];

				if($info['activite']==='planification'){
                       header("Location:../projetFinal/index6.php");
				}if($info['activite']==='bilanRealisation'){
                       header("Location:../projetFinal/index2.php");
				}if($info['activite']==='juridique'){
                       header("Location:../projetFinal/index3.php");
				}if($info['activite']==='RH'){
                       header("Location:../projetFinal/index4.php");
				}if($info['activite']==='DPFP'){
                       header("Location:../projetFinal/index5.php");
				}if($info['activite']==='divisionnaire'){
                       header("Location:../projetFinal/index1.php");
				}

			}
		}
	}
}

?>

<br><br><br>

<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">

		<h2 class="titre" align="center">CONNEXION</h2><hr>

		<form method="post">

			<div class="col-sm-12">
				<input type="text" name="Nom_utilisateur" placeholder="Nom d'utilisateur" class="form-control">
			</div>

			<div class="col-sm-12">
			<br>
				<input type="password" name="motdepasse" placeholder="Mot de passe" class="form-control">
			</div>

			<div class="col-sm-12"></div>
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
			<br>	<button type="submit" name="sub" class="btn btn-default valider btn-block">connexion</button>
			</div>
			<div class="col-sm-3"></div>

		</form>

	</div>
</div>

<br><br><br>


<br>