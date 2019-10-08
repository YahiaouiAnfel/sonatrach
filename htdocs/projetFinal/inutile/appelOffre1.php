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
      <h1 style="height: 60%;z-index:1000; font-size:50px; font-family:Georgia, 'Times New Roman', Times, serif;"><a href="index.php">Sonatrach</a></h1>
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
          <li><a href="suivi_contrat1.php">Suivi des contrats</a></li>
           <li><a href="appelOffre1.php">Appel d'offre</a></li>
      <li><a href="passation_des_marches1.php">Passation des marches</a></li>
          
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
     echo "<h3 align='center' style='color:black'>Appel d'offre </h3><hr>";
  echo "<div class='ferme' align='center'>";
  echo '<p class="centre" style="color:black">Vous  voulez faire une recherche ? <a href="recherchesuivi_contrat1.php?var=appel_offre">Rechercher</a></p>';
                          $requete= $bdd->prepare("SELECT * FROM appel_offres WHERE date LIKE ?  ORDER BY id DESC");
                          $requete->execute(array('%'.$date->format('Y').'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          $i=0;
               echo "<div  class='col-sm-6'>";
                         
          
      echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>Numero Appel Offres</th>";    
                           echo "<th class='table warning '>Num Visa definitive</th>";    
                          
                           echo "<th class='table warning'>historique</th>";      
                            echo "<th class='table warning'>Remarque</th>";  
                               echo "<th class='table warning '>Afficher</th>";   
                           echo " <div class='col-sm-12'></div>";   
                      echo "<form method='get'>";
                         while ( $i<$existe) {    
                           echo "<tr>";
                            echo "<td class='table warning'>".$row[$i]["Numero_Appel_Offres"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Num_Visa_definitive"]."</td>";    
                            
                            echo "<td class='table warning'>".$row[$i]["historique"]."</td>";   

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


