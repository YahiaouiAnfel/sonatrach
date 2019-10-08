
<!DOCTYPE html>

<html>
<head>
<title>SONATRACH</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<?php
$bdname = "sonatrach";
$user = "root";
$pass = "";
session_start();
$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass);
if(isset($_SESSION['id'])) {

?>

</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 

    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> FORIT@amt.sonatrach.dz</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-out"></i> <a href="../connexion/page/index.php">Logout</a></li>
      
      </ul>
    </div>
   
  </div>
</div>

<div class="wrapper row1" style=" background-color:#E6E6E6;color:#000000;">
  <header id="header" class="hoc clear"> 
  
    <div id="logo" class="fl_left"  >
      <h1 style="height: 60%;z-index:1000; font-size:50px; font-family:Georgia, 'Times New Roman', Times, serif;"><a href="index1.php">Sonatrach</a></h1>
      <p style="height: 60%;z-index:1000; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;"> la division forage </p>
    </div>

  </header>
</div>

<div class="wrapper row2">
 <nav id="mainav" class="hoc clear"> 
   
    <ul class="clear">

      <li class="active"><a href="index1.php">Acceuil</a></li>
     
         
<li><a class="drop" href="#">Planification</a>
<ul>
          <li><a class="drop" href="#">Développement</a>
             <ul>
                <li><a href="planificationDEVnord.php">Pôle nord</a></li>
                <li><a href="planificationDEVcentre.php">Pôle centre</a></li>
               <li><a href="planificationDEVsud.php">Pôle sud</a></li>
               </ul>

          </li>
           <li><a class="drop" href="#">Exploration</a>
              <ul>
                <li><a href="planificationEXPnord.php">Pôle nord</a></li>
                <li><a href="planificationEXPcentre.php">Pôle centre</a></li>
                <li><a href="planificationEXPsud.php">Pôle sud</a></li>
              </ul>
   
          </li>
     

    <li><a class="drop" href="#">NPT</a>
      <ul>
          <li><a href="NPTdev.php">Développement</a></li>
         <li><a href="NPTexp.php">Exploration</a></li>
       
      </ul>
    </li>
     
</ul>
</li>


  <li><a class="drop" href="#">DPFP</a>
        <ul>
          <li><a href="suivi_contrat.php">Suivi des contrats</a></li>
      <li><a href="passation_des_marches.php">Appel d'offre</a></li>
          
        </ul>
      </li>

      <li><a href="juridique.php">Juridique</a></li>
     <li><a class="drop" href="#">Ressource humaine </a>
        <ul>
          <li><a href="rhemploi.php">Emploi</a></li>
          <li><a href="rhformation.php">Formation</a></li>
          
        </ul>
     </li>
      
     
    </ul>
     

  </nav>
 
</div>
<style type="text/css">
.btn {
width:150px;
  height:50px;
  background:#fafafa;
  box-shadow:2px 2px 8px #aaa;
  font:bold 13px Arial;
  border-radius:50%;
  color:#555;
}
.aaa {
    background-image: url('recherche.png');
    background-repeat: no-repeat;
    padding-left: 40px;
color:black;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

.aaa:focus {
    width: 100%;
}


</style>
<div class="wrapper bgded" style="background-color:#ffffff">
  <div id="pageintro" class="hoc clear"> 
  <form method="post" >


        <input type="text" name="date" placeholder="Choisissez  une date " class="aaa form-control"  autocomplete="off" style=" height: 50px;" style="color:black">
   
        <button type="submit" name="sub" class="btn btn-default valider"><span class="glyphicon glyphicon-ok"></span> Rechercher </button>
      
      </form>
<br>
  
<div  class="col-sm-6">
<?php
  
 if(isset($_POST['sub'])){
echo "<div class='ferme' align='center'>";
$historique=$_POST['date'];
  $requete= $bdd->prepare("SELECT * FROM juridique WHERE historique LIKE ?  ORDER BY id DESC");
                          $requete->execute(array('%'.$historique.'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          $i=0;
                  
                            echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>Numéro contrat avenant commande</th>";    
                           echo "<th class='table warning '>Numéro de contrat de base</th>";    
                           echo "<th class='table warning '>Durée contrat avenant commande</th>"; 
                            echo "<th class='table warning'>Historique</th>";      
                            echo "<th class='table warning'>Remarque</th>";  
                                echo "<th class='table warning '>Afficher</th>"; 
                           echo " <div class='col-sm-12'></div>";   
                         echo "<form method='get'>";
                            while ( $i<$existe) {    
                           echo "<tr>";
                           echo "<td class='table warning'>".$row[$i]["num_Contrat_Avenant_Commande"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["numero_de_contrat_de_base"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["duree_contrat_avenant_commande"]."</td>";           
                           echo "<td class='table warning'>".$row[$i]["historique"]."</td>";    
                          
                            if ($row[$i]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqJuridique.php?remarque=".$row[$i]["remarque"]."&num_Contrat_Avenant_Commande=".$row[$i]["num_Contrat_Avenant_Commande"]."&numero_de_contrat_de_base=".$row[$i]["numero_de_contrat_de_base"]."'>".$row[$i]["remarque"]."</a></td>";   
                          } 
                         else{
                          echo "<td class='table warning' ><a href='modifierRqJuridique.php?remarque=".$row[$i]["remarque"]."&num_Contrat_Avenant_Commande=".$row[$i]["num_Contrat_Avenant_Commande"]."&numero_de_contrat_de_base=".$row[$i]["numero_de_contrat_de_base"]."'>Editer</a></td>";
                         }
                          echo "<td class='table warning'><a href='juridiquecomplet.php?num_Contrat_Avenant_Commande=".$row[$i]["num_Contrat_Avenant_Commande"]."&numero_de_contrat_de_base=".$row[$i]["numero_de_contrat_de_base"]."'>details</a></td>";   
                           echo "</tr>";
                     
                          $i++;}
echo "</form>";
                  
                        echo "</table>";
                           echo "</div>";


 }
   
 else{
echo "<div class='ferme' align='center'>";

  $requete= $bdd->prepare("SELECT * FROM juridique ORDER BY id DESC");
                          $requete->execute(array());
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          $i=0;
                   echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>Numéro contrat avenant commande</th>";    
                           echo "<th class='table warning '>Numéro de contrat de base</th>";    
                           echo "<th class='table warning '>Durée contrat avenant commande</th>"; 
                            echo "<th class='table warning'>Historique</th>";      
                            echo "<th class='table warning'>Remarque</th>";  
                                echo "<th class='table warning '>Afficher</th>"; 
                           echo " <div class='col-sm-12'></div>";   
                         echo "<form method='get'>";
                            while ( $i<$existe) {    
                           echo "<tr>";
                           echo "<td class='table warning'>".$row[$i]["num_Contrat_Avenant_Commande"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["numero_de_contrat_de_base"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["duree_contrat_avenant_commande"]."</td>";           
                           echo "<td class='table warning'>".$row[$i]["historique"]."</td>";    
                          
                            if ($row[$i]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqJuridique.php?remarque=".$row[$i]["remarque"]."&num_Contrat_Avenant_Commande=".$row[$i]["num_Contrat_Avenant_Commande"]."&numero_de_contrat_de_base=".$row[$i]["numero_de_contrat_de_base"]."'>".$row[$i]["remarque"]."</a></td>";   
                          } 
                         else{
                          echo "<td class='table warning' ><a href='modifierRqJuridique.php?remarque=".$row[$i]["remarque"]."&num_Contrat_Avenant_Commande=".$row[$i]["num_Contrat_Avenant_Commande"]."&numero_de_contrat_de_base=".$row[$i]["numero_de_contrat_de_base"]."'>Editer</a></td>";
                         }
                          echo "<td class='table warning'><a href='juridiquecomplet.php?num_Contrat_Avenant_Commande=".$row[$i]["num_Contrat_Avenant_Commande"]."&numero_de_contrat_de_base=".$row[$i]["numero_de_contrat_de_base"]."'>details</a></td>";   
                           echo "</tr>";
                     
                          $i++;}
echo "</form>";
                  
                        echo "</table>";
                           echo "</div>";


 }
  
?>
  
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

<script src="layout/scripts/jquery.placeholder.min.js"></script>

</body>
</html>
























<?php 
}

?>













