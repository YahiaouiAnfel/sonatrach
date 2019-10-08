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
        <li><i class="fa fa-envelope-o"></i>  FORIT@amt.sonatrach.dz</li>
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
  
<br>
  <br>




<?php
$date = new DateTime();
echo "<div  class='col-sm-12'>";
   echo "<div class='ferme' align='center'>";
 echo "<h3 align='center' style='color:black'> contrat </h3><hr>";
   echo '<p class="centre"  style="color:black">Vous  voulez faire une recherche ? <a href="recherchesuivi_contrat.php?var=contrat">Rechercher</a></p>';
                          $requete= $bdd->prepare("SELECT * FROM contrat WHERE date LIKE ? ORDER BY id DESC");
                          $requete->execute(array('%'.$date->format('Y').'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          $i=0;

               echo "<div  class='col-sm-6'>";
                          
                   echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>Numéro contrat</th>";    
                           echo "<th class='table warning '>Objet Contrat</th>";    
                           echo "<th class='table warning '>Date signature</th>"; 
                           echo "<th class='table warning'>Historique</th>";      
                            echo "<th class='table warning'>Remarque</th>";  
                               echo "<th class='table warning '>Afficher</th>";  
                               echo "<th class='table warning '>Fin contrat</th>";   

                           echo " <div class='col-sm-12'></div>";   
                      echo "<form method='get'>";
                                 while( $i<$existe){

$Date_signature=$row[$i]["Date_signature"];
$date = new DateTime();
$timestamp= strtotime($Date_signature);
$date->setTimestamp($timestamp);
$Duree=$row[$i]["Duree"];
$date->add(new DateInterval('P'.$Duree.'M'));


$date_courante = new DateTime(date("Y-m-d"));
$date_courante1 = new DateTime(date("Y-m-d"));
$date_courante->add(new DateInterval('P12M'));

$interval = $date_courante1->diff($date);
if (($interval->format('%R%a ')>0)&&($interval->format('%R%a ')<60) ){
  echo "<tr style='background-color:red'>";
                            echo "<td class='table warning'>".$row[$i]["Num_contrat"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Objet_Contrat"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Date_signature"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["historique"]."</td>";  


                         if ($row[$i]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqsuivi_contrat.php?remarque=".$row[$i]["remarque"]."&Num_contrat=".$row[$i]["Num_contrat"]."&Date_signature=".$row[$i]["Date_signature"]."'>".$row[$i]["remarque"]."</a></td>";   
                          } 
                         else{
                         echo "<td class='table warning' ><a href='modifierRqsuivi_contrat.php?remarque=".$row[$i]["remarque"]."&Num_contrat=".$row[$i]["Num_contrat"]."'>Editer</a></td>"; 
                         }
                             echo "<td class='table warning'><a href='suivi_contratcomplet.php?var1=".$row[$i]["Num_contrat"]."'>details</a></td>";         echo "<td class='table warning'>".$interval->format('%R%a ')."jours</td>";
                          echo "</tr>";
$i++;
}
if (($interval->format('%R%a ')>60)&&($interval->format('%R%a ')<365) ){
  echo "<tr style='background-color:orange'>";
                            echo "<td class='table warning'>".$row[$i]["Num_contrat"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Objet_Contrat"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Date_signature"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["historique"]."</td>";   

                         if ($row[$i]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqsuivi_contrat.php?remarque=".$row[$i]["remarque"]."&Num_contrat=".$row[$i]["Num_contrat"]."&Date_signature=".$row[$i]["Date_signature"]."'>".$row[$i]["remarque"]."</a></td>";   
                          } 
                         else{
                         echo "<td class='table warning' ><a href='modifierRqsuivi_contrat.php?remarque=".$row[$i]["remarque"]."&Num_contrat=".$row[$i]["Num_contrat"]."'>Editer</a></td>"; 
                         }
                             echo "<td class='table warning'><a href='suivi_contratcomplet.php?var1=".$row[$i]["Num_contrat"]."'>details</a></td>";             echo "<td class='table warning'>".$interval->format('%R%a ')."jours</td>";

                          echo "</tr>";
$i++;
}
else{   
                           echo "<tr>";
                            echo "<td class='table warning'>".$row[$i]["Num_contrat"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Objet_Contrat"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Date_signature"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["historique"]."</td>";   

                         if ($row[$i]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqsuivi_contrat.php?remarque=".$row[$i]["remarque"]."&Num_contrat=".$row[$i]["Num_contrat"]."&Date_signature=".$row[$i]["Date_signature"]."'>".$row[$i]["remarque"]."</a></td>";   
                          } 
                         else{
                         echo "<td class='table warning' ><a href='modifierRqsuivi_contrat.php?remarque=".$row[$i]["remarque"]."&Num_contrat=".$row[$i]["Num_contrat"]."'>Editer</a></td>"; 
                         }
                             echo "<td class='table warning'><a href='suivi_contratcomplet.php?var1=".$row[$i]["Num_contrat"]."'>details</a></td>";         
                             echo "<td class='table warning'><a href='suivi_contratcomplet.php?var1=".$row[$i]["Num_contrat"]."'>details</a></td>";             echo "<td class='table warning'>---</td>";
                                  
                          echo "</tr>";
                            $i++;}}
                      echo "</form>";
                  
                    echo "</table>"; 
              echo "</div>";
   echo "</div>";
  
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



