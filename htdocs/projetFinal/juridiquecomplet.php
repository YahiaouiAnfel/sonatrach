<!DOCTYPE html>

<html >
<head>
<title>SONATRACH</title>
<meta charset="utf-8">
<meta  name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link   href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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

<div class="wrapper bgded" style="background-color:#ffffff">
  <div id="pageintro" class="hoc clear" > 
 <h2 align="center" style="color: black">  Juridique </h2><hr>

<div  class="col-sm-6" style="overflow-x:scroll; height:400px;">
<?php
echo "<div class='ferme' align='center'>";
$r=$_GET['num_Contrat_Avenant_Commande'];
$r1=$_GET['numero_de_contrat_de_base'];
                          $requete= $bdd->prepare("SELECT * FROM juridique WHERE num_Contrat_Avenant_Commande=? AND numero_de_contrat_de_base=?");
                          $requete->execute(array($r,$r1));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          $j=0;
                          echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";
                           echo "<th class='table warning'>Historique</th>";    
                           echo "<th class='table warning'>Structure</th>";    
                           echo "<th class='table warning'>Structure contractante division</th>";    
                           echo "<th class='table warning'>Type</th>";    
                           echo "<th class='table warning'>Numéro contrat avenant commande</th>";   
                           echo "<th class='table warning'>Numéro de contrat de base</th>";   
                            echo "<th class='table warning'>Objet contrat avenant commande</th>";   
                           echo "<th class='table warning'>Fournisseur</th>";    
                             echo "<th class='table warning'>Pays origine</th>";    
                           echo "<th class='table warning'>Capital social</th>";    
                           echo "<th class='table warning'>Montant ht da</th>";    
                           echo "<th class='table warning'>Montant ht euro</th>";    
                           echo "<th class='table warning'>Montant ht dollars</th>";   
                           echo "<th class='table warning'>Montant ht yen</th>";   
                            echo "<th class='table warning'>Montant ht jonayh</th>";   
                           echo "<th class='table warning'>Montant ht taux de change</th>"; 
                              echo "<th class='table warning'>Date signature contrat avenant Commande</th>";    
                           echo "<th class='table warning'> Durée contrat avenant commande</th>";    
                           echo "<th class='table warning'>Mode de passation</th>";    
                           echo "<th class='table warning'>Motif de gre a gre simple </th>";    
                           echo "<th class='table warning'>Type contrat avenant commande</th>";   
                           echo "<th class='table warning'>Visa commission date visa</th>";   
                            echo "<th class='table warning'>Visa commission numéro visa</th>";   
                           echo "<th class='table warning'>Visa commission commission</th>"; 
                           echo "<th class='table warning'>Passe ouverte refus visa commission date signature</th>";   
                           echo "<th class='table warning'>Passe ouverte refus visa commission numéro visa refusé</th>"; 
                           echo "<th class='table warning'>Remarque</th>";  
                            echo " <div class='col-sm-12'></div>";
                        
                          echo "<tr>";
                            echo "<td class='table warning'>".$row[$j]["historique"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["structure"]."</td>";   
                           echo "<td class='table warning'>".$row[$j]["structure_contractante_division"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["type"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["num_Contrat_Avenant_Commande"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["numero_de_contrat_de_base"]."</td>";
                           echo "<td class='table warning'>".$row[$j]["objet_contrat_avenant_commande"]."</td>";     
                            echo "<td class='table warning'>".$row[$j]["fournisseur"]."</td>";    
                              echo "<td class='table warning'>".$row[$j]["pays_origine"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["capital_social"]."</td>";   
                           echo "<td class='table warning'>".$row[$j]["montant_ht_da"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["montant_ht_euro"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["montant_ht_dollars"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["montant_ht_yen"]."</td>";
                           echo "<td class='table warning'>".$row[$j]["montant_ht_jonayh"]."</td>";     
                            echo "<td class='table warning'>".$row[$j]["montant_ht_taux_de_change"]."</td>";    
                              echo "<td class='table warning'>".$row[$j]["date_signature_contrat_avenant_commande"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["duree_contrat_avenant_commande"]."</td>";   
                           echo "<td class='table warning'>".$row[$j]["mode_de_passation"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["motif_de_gre_a_gre_simple"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["type_contrat_avenant_commande"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["visa_commission_date_visa"]."</td>";
                           echo "<td class='table warning'>".$row[$j]["visa_commission_numero_visa"]."</td>";     
                            echo "<td class='table warning'>".$row[$j]["visa_commission_commission"]."</td>";    
                               echo "<td class='table warning'>".$row[$j]["passe_ouverte_refus_visa_commission_date_signature"]."</td>";     
                            echo "<td class='table warning'>".$row[$j]["passe_ouverte_refus_visa_commission_numero_visa_refuse"]."</td>";  
                             if ($row[$j]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqJuridique.php?remarque=".$row[$j]["remarque"]."&num_Contrat_Avenant_Commande=".$row[$j]["num_Contrat_Avenant_Commande"]."&numero_de_contrat_de_base=".$row[$j]["numero_de_contrat_de_base"]."'>".$row[$j]["remarque"]."</a></td>";   
                          } 
                         else{
                          echo "<td class='table warning' ><a href='modifierRqJuridique.php?remarque=".$row[$j]["remarque"]."&num_Contrat_Avenant_Commande=".$row[$j]["num_Contrat_Avenant_Commande"]."&numero_de_contrat_de_base=".$row[$j]["numero_de_contrat_de_base"]."'>Editer</a></td>";
                         }
                           echo "</tr>";



                        echo "</table>";  
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






































