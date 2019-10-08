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

      <li class="active"><a href="index2.php">Acceuil</a></li>
     
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

     
    </ul>
     

  </nav>

</div>

<div class="wrapper bgded" style="background-color:#ffffff">
  <div id="pageintro" class="hoc clear"> 
 

<div  class="col-sm-6" style="overflow-x:scroll; height:400px;">
  <?php
echo "<div class='ferme' align='center'>";
  if(isset($_GET['dev'])){
       $r=$_GET['dev'];
 $r1=$_GET['historique'];

                            $requete= $bdd->prepare("SELECT * FROM npt_dev WHERE historique=? AND  Temps_Productif= ? ORDER BY id DESC");
                          $requete->execute(array($r1,$r));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                       $i=0;
               echo "<div  class='col-sm-6'>";
                           echo "<h3 align='center' style='color:black;'> NPT DEV </h3><hr>";
               echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>Temps Productif</th>";    
                           echo "<th class='table warning '>Problème Puits</th>";    
                           echo "<th class='table warning '>NPT Sonatrach</th>"; 
                             echo "<th class='table warning '>NPT Entrepreneur</th>";    
                           echo "<th class='table warning '>NPT Societés de Services</th>";    
                           echo "<th class='table warning '>Attentes Escortes</th>"; 
                             echo "<th class='table warning '>Blocage des mouvements</th>";    
                           echo "<th class='table warning '>Total NPT</th>";    
                           echo "<th class='table warning '>Total Activité</th>";
   echo "<th class='table warning '>Taux_NPT</th>"; 
                            echo "<th class='table warning'>Historique</th>";      
                            echo "<th class='table warning'>Remarque</th>";  
                          
                           echo " <div class='col-sm-12'></div>";   
                      echo "<form method='get'>";
                         while ( $i<$existe) {    
                           echo "<tr>";
                            echo "<td class='table warning'>".$row[$i]["Temps_Productif"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Problemes_Puits"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["NPT_Sonatrach"]."</td>";   
                             echo "<td class='table warning'>".$row[$i]["NPT_Entrepreneur"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["NPT_Societes_de_Services"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Attentes_Escortes"]."</td>";   
                             echo "<td class='table warning'>".$row[$i]["Blocage_des_mouvements"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Total_NPT"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Total_Activite"]."</td>"; 
                              echo "<td class='table warning'>".$row[$i]["Taux_NPT"]."</td>";  
                            echo "<td class='table warning'>".$row[$i]["historique"]."</td>";   

                         if ($row[$i]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqNPT.php?remarque=".$row[$i]["remarque"]."&dev=".$row[$i]["Temps_Productif"]."&historique=".$row[$i]["historique"]."'>".$row[$i]["remarque"]."</a></td>";   
                          } 
                         else{
                         echo "<td class='table warning' ><a href='modifierRqNPT.php?remarque=".$row[$i]["remarque"]."&dev=".$row[$i]["Temps_Productif"]."&historique=".$row[$i]["historique"]."'>Editer</a></td>"; 
                         }
                                   
                          echo "</tr>";
                            $i++;}
                      echo "</form>";
                  
                    echo "</table>"; 
              echo "</div>";  }   
      echo "</div>";
                   
 

if(isset($_GET['exp'])){
       $r=$_GET['exp'];
$r1=$_GET['historique'];
                        
                           $requete= $bdd->prepare("SELECT * FROM npt_exp WHERE historique=? AND  Temps_Productif= ? ORDER BY id DESC");
                          $requete->execute(array($r1,$r));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                       $i=0;
               echo "<div  class='col-sm-6'>";
                           echo "<h3 align='center' style='color:black;'> NPT EXP </h3><hr>";
        echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>Temps Productif</th>";    
                           echo "<th class='table warning '>Problème Puits</th>";    
                           echo "<th class='table warning '>NPT Sonatrach</th>"; 
                             echo "<th class='table warning '>NPT Entrepreneur</th>";    
                           echo "<th class='table warning '>NPT Societés de Services</th>";    
                           echo "<th class='table warning '>Attentes Escortes</th>"; 
                             echo "<th class='table warning '>Blocage des mouvements</th>";    
                           echo "<th class='table warning '>Total NPT</th>";    
                           echo "<th class='table warning '>Total Activité</th>";
   echo "<th class='table warning '>Taux_NPT</th>"; 
                            echo "<th class='table warning'>Historique</th>";      
                            echo "<th class='table warning'>Remarque</th>";  
                               
                           echo " <div class='col-sm-12'></div>";   
                      echo "<form method='get'>";
                         while ( $i<$existe) {    
                           echo "<tr>";
                            echo "<td class='table warning'>".$row[$i]["Temps_Productif"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Problemes_Puits"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["NPT_Sonatrach"]."</td>";   
                             echo "<td class='table warning'>".$row[$i]["NPT_Entrepreneur"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["NPT_Societes_de_Services"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Attentes_Escortes"]."</td>";   
                             echo "<td class='table warning'>".$row[$i]["Blocage_des_mouvements"]."</td>";   
                            echo "<td class='table warning'>".$row[$i]["Total_NPT"]."</td>";    
                            echo "<td class='table warning'>".$row[$i]["Total_Activite"]."</td>"; 
                              echo "<td class='table warning'>".$row[$i]["Taux_NPT"]."</td>";  
                            echo "<td class='table warning'>".$row[$i]["historique"]."</td>";   

                         if ($row[$i]["remarque"]!=="") {
                           echo "<td class='table warning' ><a href='modifierRqNPT.php?remarque=".$row[$i]["remarque"]."&dev=".$row[$i]["Temps_Productif"]."&historique=".$row[$i]["historique"]."'>".$row[$i]["remarque"]."</a></td>";   
                          } 
                         else{
                         echo "<td class='table warning' ><a href='modifierRqNPT.php?remarque=".$row[$i]["remarque"]."&dev=".$row[$i]["Temps_Productif"]."&historique=".$row[$i]["historique"]."'>Editer</a></td>"; 
                         }
                                 
                          echo "</tr>";
                            $i++;}
                      echo "</form>";
                  
                    echo "</table>"; 
              echo "</div>";  }   
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




















