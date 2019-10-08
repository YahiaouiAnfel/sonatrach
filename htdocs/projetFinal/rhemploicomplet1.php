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
      <h1 style="z-index:1000; font-size:50px; font-family:Georgia, 'Times New Roman', Times, serif;"><a href="index1.php">Sonatrach</a></h1>
      <p style="z-index:1000; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif;"> la division forage </p>
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
 <h2 align="center" style="color: black">  RH Emploi </h2><hr>

<div  class="col-sm-6" style="overflow-x:scroll; height:400px;">
<?php
echo "<div class='ferme' align='center'>";
$r=$_GET['code_fct'];
$r1=$_GET['code_act'];
                          $requete= $bdd->prepare("SELECT * FROM rh_emploi WHERE code_fct=? AND code_act=?");
                          $requete->execute(array($r,$r1));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          $j=0;
                  
                          echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";
                                                echo "<th class='table warning'>Historique</th>";    
                           echo "<th class='table warning'>Numéro</th>";    
                           echo "<th class='table warning'>Code fonction</th>";    
                           echo "<th class='table warning'>Code activité</th>";    
                           echo "<th class='table warning'>Nom et prénom</th>";   
                           echo "<th class='table warning'>Sexe</th>";   
                            echo "<th class='table warning'>Qualification</th>";   
                           echo "<th class='table warning'>poste</th>";    
                             echo "<th class='table warning'>Csp</th>";    
                           echo "<th class='table warning'>Csp2</th>";    
                           echo "<th class='table warning'>Fonction</th>";    
                           echo "<th class='table warning'>W RESIDENCE</th>";    
                           echo "<th class='table warning'>W AFFECTATION</th>";   
                           echo "<th class='table warning'>Région</th>";   
                            echo "<th class='table warning'>Mode recrutement</th>";   
                           echo "<th class='table warning'>Motif recrutement</th>"; 
                              echo "<th class='table warning'>Obsérvation</th>";    
                           echo "<th class='table warning'>Remarque</th>";    
                          
                          
                            echo " <div class='col-sm-12'></div>";
                        
                          echo "<tr>";
                            echo "<td class='table warning'>".$row[$j]["historique"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["N"]."</td>";   
                           echo "<td class='table warning'>".$row[$j]["code_fct"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["code_act"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["nom_prenom"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["sexe"]."</td>";
                           echo "<td class='table warning'>".$row[$j]["qualification"]."</td>";     
                            echo "<td class='table warning'>".$row[$j]["poste"]."</td>";    
                              echo "<td class='table warning'>".$row[$j]["csp"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["csp2"]."</td>";   
                           echo "<td class='table warning'>".$row[$j]["fonction"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["W_RESIDENCE"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["W_AFFECTATION"]."</td>";    
                           echo "<td class='table warning'>".$row[$j]["region"]."</td>";
                           echo "<td class='table warning'>".$row[$j]["mode_recrutement"]."</td>";     
                            echo "<td class='table warning'>".$row[$j]["motif_recrutement"]."</td>";    
                              echo "<td class='table warning'>".$row[$j]["observation"]."</td>";    
                          
                             if ($row[$j]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqJuridique1.php?remarque=".$row[$j]["remarque"]."&code_fct=".$row[$j]["code_fct"]."&code_act=".$row[$j]["code_act"]."'>".$row[$j]["remarque"]."</a></td>";   
                          } 
                         else{
                          echo "<td class='table warning' ><a href='modifierRqJuridique1.php?remarque=".$row[$j]["remarque"]."&code_fct=".$row[$j]["code_fct"]."&code_act=".$row[$j]["code_act"]."'>Editer</a></td>";
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



























