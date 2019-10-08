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

      <li class="active"><a href="index4.php">Acceuil</a></li>
     
   

     <li><a class="drop" href="#">Ressource humaine </a>
        <ul>
          <li><a href="rhemploi1.php">Emploi</a></li>
          <li><a href="rhformation1.php">Formation</a></li>
          
        </ul>
     </li>
      
     
    </ul>
     

  </nav>
</div>

<div class="wrapper bgded" style="background-color:#ffffff">
  <div id="pageintro" class="hoc clear"> 
  
  
   <h2 align="center" style="color:black">RH FORMATION </h2><hr>



<div  class="col-sm-6" style="overflow-x:scroll; height:400px;">

   <?php
echo "<div class='ferme' align='center'>";

       $r=$_GET['matricule'];
 $r1=$_GET['code_formation'];
   $requete= $bdd->prepare("SELECT * FROM rh_formation WHERE matricule =? AND code_formation = ? ORDER BY id DESC");
                          $requete->execute(array($r,$r1));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          $i=0;
                   echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>Structure</th>";    
                           echo "<th class='table warning '>Matricule</th>";    
                           echo "<th class='table warning '>CSP</th>"; 
                           echo "<th class='table warning '>Domaine</th>";    
                           echo "<th class='table warning '>Intitulé formation</th>";    
                           echo "<th class='table warning '>Catégorie formation</th>"; 
                           echo "<th class='table warning '>Type formation</th>";    
                           echo "<th class='table warning '>Code formation</th>";    
                           echo "<th class='table warning '>Code organisme</th>"; 
                           echo "<th class='table warning '>Organisme formation</th>";    
                           echo "<th class='table warning '>Lieu déroulement formation</th>";    
                           echo "<th class='table warning '>Lieu</th>"; 
                           echo "<th class='table warning '>H_J</th>";    
                           echo "<th class='table warning '>Pédagogie</th>";    
                           echo "<th class='table warning '>Hébergement réstauration</th>"; 
                           echo "<th class='table warning '>Transport</th>";    
                           echo "<th class='table warning '>Présalaire</th>";    
                           echo "<th class='table warning '>Autres charges</th>"; 
                           echo "<th class='table warning '>Cout global</th>";    
                           echo "<th class='table warning '>Dont devise</th>";    
                           echo "<th class='table warning '>Prévision</th>"; 
                          
                            echo "<th class='table warning'>Historique</th>";      
                            echo "<th class='table warning'>Remarque</th>";  
                              
                         echo "<form method='get'>";
                            while ( $i<$existe) {    
                          
                          
                         echo "<tr>";
                      echo "<td class='table warning'>".$row[$i]["structure"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["matricule"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["CSP"]."</td>";     
                            echo "<td class='table warning'>".$row[$i]["domaine"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["intitule_formation"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["categorie_formation"]."</td>";     
                            echo "<td class='table warning'>".$row[$i]["type_formation"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["code_formation"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["code_organisme"]."</td>";     
                            echo "<td class='table warning'>".$row[$i]["organisme_formation"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["lieu_deroulement_formation"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["lieu"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["H_J"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["pedagogie"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["hebergement_restauration"]."</td>";     
                            echo "<td class='table warning'>".$row[$i]["transport"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["presalaire"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["autres_charges"]."</td>";     
                            echo "<td class='table warning'>".$row[$i]["cout_global"]."</td>";   
                           echo "<td class='table warning'>".$row[$i]["dont_devise"]."</td>";    
                           echo "<td class='table warning'>".$row[$i]["prevision"]."</td>";     
                                  
                         echo "<td class='table warning'>".$row[$i]["historique"]."</td>";   

                         if ($row[$i]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqrhformation1.php?remarque=".$row[$i]["remarque"]."&matricule=".$row[$i]["matricule"]."&code_formation=".$row[$i]["code_formation"]."'>".$row[$i]["remarque"]."</a></td>";   
                          } 
                         else{
                          echo "<td class='table warning' ><a href='modifierRqrhformation1.php?remarque=".$row[$i]["remarque"]."&matricule=".$row[$i]["matricule"]."&code_formation=".$row[$i]["code_formation"]."'>Editer</a></td>";
                         }
                             
                        echo "</tr>";
                        
                            
      
                        $i++;}
echo "</form>";
                  
                        echo "</table>";
                           echo "</div>";



?></div>
  
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


