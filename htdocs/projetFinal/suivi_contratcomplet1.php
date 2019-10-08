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
      <h1 style="z-index:1000; font-size:50px; font-family:Georgia, 'Times New Roman', Times, serif;"><a href="index1.php">Sonatrach</a></h1>
      <p style="z-index:1000; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;"> la division forage </p>
    </div>

    
  </header>
</div>

<div class="wrapper row2">
 <nav id="mainav" class="hoc clear"> 
   
    <ul class="clear">

      <li class="active"><a href="index5.php">Acceuil</a></li>
     
     
   <li><a class="drop" href="#">DPFP</a>
        <ul>
            <li><a href="suivi_contrat.php">Suivi des contrats</a></li>
      <li><a href="passation_des_marches.php">Appel d'offre</a></li>
          
        </ul>
      </li>
      
     
    </ul>
     

  </nav>

</div>

<div class="wrapper bgded" style="background-color:#ffffff">
  <div id="pageintro" class="hoc clear"> 
 
   

<div  class="col-sm-6" style="overflow-x:scroll; height:400px;">
  <?php
echo "<div class='ferme' align='center'>";
  if(isset($_GET['var1'])){
       $r=$_GET['var1'];


                           $requete= $bdd->prepare("SELECT * FROM contrat WHERE Num_contrat= ? ORDER BY id DESC");
                          $requete->execute(array($r));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                       $i=0;
               echo "<div  class='col-sm-6'>";
                           echo "<h3 align='center' style='color:black;'> Suivi des contrats </h3><hr>";
                echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>Items</th>";    
                           echo "<th class='table warning '>Numéro contrat</th>";    
                           echo "<th class='table warning '>Objet Contrat</th>";
                           echo "<th class='table warning '>Co contractant</th>";    
                           echo "<th class='table warning '>Durée</th>";    
                           echo "<th class='table warning '>Date signature</th>";
                           echo "<th class='table warning '>Mode passation</th>";    
                           echo "<th class='table warning '>Visa commission</th>";    
                           echo "<th class='table warning '>Montant Contrat</th>";
                           echo "<th class='table warning '>Structure</th>";    
                           echo "<th class='table warning '>Obsérvations</th>";    
                           
                           echo "<th class='table warning'>Historique</th>";      
                            echo "<th class='table warning'>Remarque</th>";  
                              
                           echo " <div class='col-sm-12'></div>";   
                      echo "<form method='get'>";
                         while ( $i<$existe) {    
                           echo "<tr>";
                            echo "<td class='table warning'>".$row[$i]["Items"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Num_contrat"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Objet_Contrat"]."</td>"; 
                             echo "<td class='table warning'>".$row[$i]["Co_contractant"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Duree"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Date_signature"]."</td>"; 
                             echo "<td class='table warning'>".$row[$i]["Mode_passation"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Visa_commission"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Montant_Contrat"]."</td>"; 
                             echo "<td class='table warning'>".$row[$i]["Structure"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Observations"]."</td>";    
                                                        echo "<td class='table warning'>".$row[$i]["historique"]."</td>";   

                       if ($row[$i]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqsuivi_contrat1.php?remarque=".$row[$i]["remarque"]."&Num_contrat=".$row[$i]["Num_contrat"]."&Date_signature=".$row[$i]["Date_signature"]."'>".$row[$i]["remarque"]."</a></td>";   
                          } 
                         else{
                         echo "<td class='table warning' ><a href='modifierRqsuivi_contrat1.php?remarque=".$row[$i]["remarque"]."&Num_contrat=".$row[$i]["Num_contrat"]."'>Editer</a></td>"; 
                         }
                              
                          echo "</tr>";
                            $i++;}
                      echo "</form>";
                  
                    echo "</table>"; 
              echo "</div>";  }   
      echo "</div>";
                   
 
/*
if(isset($_GET['var2'])){
       $r=$_GET['var2'];
$r1=$_GET['Num_Visa_definitive'];
                        
                           $requete= $bdd->prepare("SELECT * FROM appel_offres WHERE Num_Visa_definitive=? AND Numero_Appel_Offres= ? ORDER BY id DESC");
                          $requete->execute(array($r1,$r));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                       $i=0;
               echo "<div  class='col-sm-6'>";
                           echo "<h3 align='center'  style='color:black;'> Appel d'offres </h3><hr>";
         echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>historique</th>";    
                           echo "<th class='table warning '>Items</th>";    
                          echo "<th class='table warning '>demande</th>";    
                           echo "<th class='table warning '>datereceptionrequete</th>";    
                           echo "<th class='table warning '>Numero Appel Offres</th>";
                           echo "<th class='table warning '>Date introduction lancement DAO Prequalif</th>";    
                           echo "<th class='table warning '>Num visa conformite_DAO</th>";    
                           echo "<th class='table warning '>Num BAOSEM date publication</th>";
                           echo "<th class='table warning '>Date ouverture Cop Technique</th>";    
                           echo "<th class='table warning '>Decision</th>";    
                           echo "<th class='table warning '>Date debut travaux CEOT</th>";
                           echo "<th class='table warning '>Date fin travaux CEOT</th>";    
                           echo "<th class='table warning '>Date ouverture COP Financiere</th>";    
                          echo "<th class='table warning '>Num BAOSEM date attribution provisoire</th>";    
                           echo "<th class='table warning '>Num Visa definitive</th>";    
                           echo "<th class='table warning '>Observation</th>";
                             echo "<th class='table warning'>Remarque</th>";  
                               echo "<th class='table warning '>Afficher</th>";   
                           echo " <div class='col-sm-12'></div>";   
                      echo "<form method='get'>";
                         while ( $i<$existe) {    
                           echo "<tr>";
                            echo "<td class='table warning'>".$row[$i]["historique"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Items"]."</td>";    
                             echo "<td class='table warning'>".$row[$i]["demande"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["datereceptionrequete"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Numero_Appel_Offres"]."</td>"; 
                             echo "<td class='table warning'>".$row[$i]["Date_introduction_lancement_DAO_Prequalif"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Num_visa_conformite_DAO"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Num_BAOSEM_date_publication"]."</td>"; 
                             echo "<td class='table warning'>".$row[$i]["Date_ouverture_Cop_Technique"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Decision"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Date_debut_travaux_CEOT"]."</td>"; 
                             echo "<td class='table warning'>".$row[$i]["Date_fin_travaux_CEOT"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Date_ouverture_COP_Financiere"]."</td>";    
                             echo "<td class='table warning'>".$row[$i]["Num_BAOSEM_date_attribution_provisoire"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Num_Visa_definitive"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Observation"]."</td>"; 
                         

                           if ($row[$i]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqsuivi_contrat1.php?remarque=".$row[$i]["remarque"]."&Numero_Appel_Offres=".$row[$i]["Numero_Appel_Offres"]."&Num_Visa_definitive=".$row[$i]["Num_Visa_definitive"]."'>".$row[$i]["remarque"]."</a></td>";   
                          } 
                         else{
                         echo "<td class='table warning' ><a href='modifierRqsuivi_contrat1.php?remarque=".$row[$i]["remarque"]."&Numero_Appel_Offres=".$row[$i]["Numero_Appel_Offres"]."&Num_Visa_definitive=".$row[$i]["Num_Visa_definitive"]."'>Editer</a></td>"; 
                         }
                             echo "<td class='table warning'><a href='suivi_contratcomplet1.php?var2=".$row[$i]["Numero_Appel_Offres"]."&Num_Visa_definitive=".$row[$i]["Num_Visa_definitive"]."'>details</a></td>";         
                          echo "</tr>";
                            $i++;}
                      echo "</form>";
                  
                    echo "</table>"; 

              echo "</div>";  } */   
      echo "</div>";
                  
                   

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
















