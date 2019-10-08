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
  <div id="pageintro" class="hoc clear"> 
 <h2 align="center" style="color: black">  Appel d'offre</h2><hr>

<div  class="col-sm-6" style="overflow-x:scroll; height:400px;">
<?php
echo "<div class='ferme' align='center'>";
$r=$_GET['contrat_num'];
$r1=$_GET['numero_appel_offre'];
                          $requete= $bdd->prepare("SELECT * FROM passation_des_marches WHERE contrat_num=? AND numero_appel_offre=?");
                          $requete->execute(array($r,$r1));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          $j=0;
                  
                          
                           echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>Intitulé description des marchés</th>";    
                           echo "<th class='table warning '>Numéro appel offre</th>";    
                           echo "<th class='table warning '>Situation des marchés</th>";
                            echo "<th class='table warning '>Cout estimatif da</th>";    
                           echo "<th class='table warning '>Taut de change</th>";    
                           echo "<th class='table warning '>Mode de passation</th>";
                            echo "<th class='table warning '>Nombre de lots</th>";    
                           echo "<th class='table warning '>Dao début élaboration</th>";    
                           echo "<th class='table warning '>Dao fin élaboration</th>";
                            echo "<th class='table warning '>Cmcompetantelancement cme dépot de dao</th>";    
                           echo "<th class='table warning '>Cmcompetantelancement cme numéro visa</th>";    
                           echo "<th class='table warning '>Cmcompetantelancement cma dépot dao</th>";
                            echo "<th class='table warning '>Cmcompetantelancement cma numéro visa</th>";    
                           echo "<th class='table warning '>Cmcompetantelancement cmd dépot dao</th>";    
                           echo "<th class='table warning '>Cmcompetantelancement cmd numéro visa</th>";
                            echo "<th class='table warning '>Date pub numéro baosem</th>";    
                           echo "<th class='table warning '>Date cloture dépot offre</th>";     
                           echo "<th class='table warning '>nombre plis recus</th>"; 
     echo "<th class='table warning '>Ouverture public offre</th>";    
                           echo "<th class='table warning '>Rapport évaluation démarrage</th>";    
                           echo "<th class='table warning '>Rapport évaluation cloture évaluation</th>";
                            echo "<th class='table warning '>Rapport évaluation emission rapport</th>";    
                           echo "<th class='table warning '>Ouverture offre financiere</th>";    
                           echo "<th class='table warning '>Attribution des lots</th>";
                            echo "<th class='table warning '>Publication résultat attribution provisoire au baosem</th>";    
                           echo "<th class='table warning '> Recours</th>";    
                           echo "<th class='table warning '>Cmattributiondefinitive cme dépot dossier</th>";
                            echo "<th class='table warning '>Cmattributiondefinitive cme numéro visa</th>";    
                           echo "<th class='table warning '>Cmattributiondefinitive cma dépot dossier</th>";    
                           echo "<th class='table warning '>Cmattributiondefinitive cma numéro visa</th>";
                            echo "<th class='table warning '>Cmattributiondefinitive cmd dépot dossier</th>";    
                           echo "<th class='table warning '>Cmattributiondefinitive cmd numéro visa</th>";    
                           echo "<th class='table warning '> Contrat numéro</th>";
                            echo "<th class='table warning '>Contrat date signature</th>";    
                           echo "<th class='table warning '>Contrat durée</th>";     
                           echo "<th class='table warning '>Obsérvation annulation</th>";
                           echo "<th class='table warning '>Obsérvation infructuosite</th>"; 
                            echo "<th class='table warning'>Historique</th>";      
                            echo "<th class='table warning'>Remarque</th>";  
                         
                        
                         echo "<form method='get'>";
                          $i=0;
                          
                         echo "<tr>";
                      echo "<td class='table warning'>".$row[$i]["intitule_description_des_marches"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["numero_appel_offre"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["situation_des_marches"]."</td>";
                           echo "<td class='table warning'>".$row[$i]["cout_estimatif_da"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["taut_de_change"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["mode_de_passation"]."</td>";
                           echo "<td class='table warning'>".$row[$i]["nombre_de_lots"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["dao_debut_elaboration"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["dao_fin_elaboration"]."</td>";
                           echo "<td class='table warning'>".$row[$i]["cmcompetantelancement_cme_depot_de_dao"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["cmcompetantelancement_cme_num_visa"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["cmcompetantelancement_cma_depot_dao"]."</td>";
                           echo "<td class='table warning'>".$row[$i]["cmcompetantelancement_cma_num_visa"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["cmcompetantelancement_cmd_depot_dao"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["cmcompetantelancement_cmd_num_visa"]."</td>";
                           echo "<td class='table warning'>".$row[$i]["date_pub_num_baosem"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["date_cloture_depot_offre"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["nombre_plis_recus"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["ouverture_public_offre"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["rapport_evaluation_demarrage"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["rapport_evaluation_cloture_evaluation"]."</td>";
                           echo "<td class='table warning'>".$row[$i]["rapport_evaluation_emission_rapport"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["ouverture_offre_financiere"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["attribution_des_lots"]."</td>";
                           echo "<td class='table warning'>".$row[$i]["publication_resultat_attribution_provisoire_au_baosem"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["recours"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["cmattributiondefinitive_cme_depot_dossier"]."</td>";
                           echo "<td class='table warning'>".$row[$i]["cmattributiondefinitive__cme_numero_visa"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["cmattributiondefinitive_cma_depot_dossier"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["cmattributiondefinitive_cma_numeor_visa"]."</td>";
                           echo "<td class='table warning'>".$row[$i]["cmattributiondefinitive_cmd_depot_dossier"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["cmattributiondefinitive_cmd_numero_visa"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["contrat_num"]."</td>";
                           echo "<td class='table warning'>".$row[$i]["contrat_date_signature"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["contrat_duree"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["observation_annulation"]."</td>";  
                           echo "<td class='table warning'>".$row[$i]["observation_infructuosite"]."</td>";                
                         echo "<td class='table warning'>".$row[$i]["historique"]."</td>";   

                         if ($row[$i]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqpassation_des_marches.php?remarque=".$row[$i]["remarque"]."&numero_appel_offre=".$row[$i]["numero_appel_offre"]."&contrat_num=".$row[$i]["contrat_num"]."'>".$row[$i]["remarque"]."</a></td>";   
                          } 
                         else{
                          echo "<td class='table warning' ><a href='modifierRqpassation_des_marches.php?remarque=".$row[$i]["remarque"]."&numero_appel_offre=".$row[$i]["numero_appel_offre"]."&contrat_num=".$row[$i]["contrat_num"]."'>Editer</a></td>";
                         }
                             
                        echo "</tr>";
                        
                            
      
                      $i=0;
echo "</form>";
                  
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














