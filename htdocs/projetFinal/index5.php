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
<script language="JavaScript">
/*
var position=0;
var msg="VOTRE TEXTE DEFILANT";
var msg="     "+msg;
var longue=msg.length;
var fois=(70/msg.length)+1;
for(i=0;i<=fois;i++) msg+=msg;
function textdefil() {
document.form1.deftext.value=msg.substring(position,position+70);
position++;
if(position == longue) position=0;
setTimeout("textdefil()",100); 
}
window.onload = textdefil;
dans head 
 <form name="form1" style="color: black;">
<div align="center"> 
<input type="text" name="deftext" size=100% style="background-color: red">
</div>
</form>
*/
</script>
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

      <li class="active"><a href="index5.php">Acceuil</a></li>
     
     
   <li><a class="drop" href="#">DPFP</a>
        <ul>
            <li><a href="suivi_contrat.php">Suivi des contrats</a></li>
      <li><a href="passation_des_marches.php">Appel d'offre</a></li>
          
        </ul>
      </li>
      
     
    </ul>
     

  </nav></div>
  <?php

if (file_exists ('dossierCSV_EXCEL/passation-marche.xls')) {
include 'ExtractionEtCsvpassation-marche.php';
}
if(file_exists ('dossierCSV_EXCEL/passation-marche.csv')){
include 'transformerEnCsvpassation-marche.php';
}
if (file_exists ('dossierCSV_EXCEL/suivi_contrat.xls')) {
include 'ExtractionEtCsvsuivi_contrat.php';
}
if(file_exists ('dossierCSV_EXCEL/contrat.csv')){
include 'transformerEnCsvsuivi_contrat.php';
}
?>
</div>


<div class="wrapper bgded" style="background-color:#ffffff">
 
<style type="text/css">
table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 50%;
}
th {
font-family: 'Comic Sans MS', cursive;
border: thin solid #6495ed;
width: 33%;
padding: 5px;
background-color: #D0E3FA;
background-image: url(sky.jpg);
color:black;
text-align: center;
}
td {
font-family: sans-serif;
border: thin solid #6495ed;
width: 33%;
padding: 5px;
text-align: center;
background-color: #ffffff;
}
caption {
font-family: sans-serif;
}</style>
<?php
echo"<div align='center'>";
 echo "<table  >";    
  echo "<th  style='background-color:red;' >Passation des marchés </th>";    
 $requete= $bdd->prepare("SELECT * FROM passation_des_marches ");
                          $requete->execute(array());
                          $existe= $requete->rowCount();
             $i=0;               $row = $requete->fetchAll(PDO::FETCH_ASSOC);
          while( $i<$existe){

$date_pub_num_baosem=$row[$i]["date_pub_num_baosem"];
$date_cloture_depot_offre=$row[$i]["date_cloture_depot_offre"];
$timestamp = strtotime($date_cloture_depot_offre);
$timestamp1 = strtotime($date_pub_num_baosem);
$date = new DateTime();
$date->setTimestamp($timestamp);
$date1 = new DateTime();
$date1->setTimestamp($timestamp1);
$interval = $date1->diff($date);
if (($interval->format('%R%a ')>0)&&($interval->format('%R%a ')<365) ){
 
 echo "<tr style='color:black;'>";

  echo "<td>";
  echo "il reste ".$interval->format('%R%a ')."jours ,avant la date de cloture de depot d'offre pour le ".$row[$i]["numero_appel_offre"];
  echo "</td>";

 echo "</tr>";

  
}

 $i++; }

echo "</table>";
        
echo"</div>";

echo "<br>";
echo"<div align='center'>";
 echo "<table  >";    
  echo "<th  style='background-color:red;' >Contrats </th>";    
 $requete= $bdd->prepare("SELECT * FROM contrat ");
                          $requete->execute(array());
                          $existe= $requete->rowCount();
             $i=0;               $row = $requete->fetchAll(PDO::FETCH_ASSOC);
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
if (($interval->format('%R%a ')>0)&&($interval->format('%R%a ')<365) ){
 
 echo "<tr style='color:black;'>";

  echo "<td>";
  echo "il reste ".$interval->format('%R%a ')."jours ,avant la date de fin du contrat numéro ".$row[$i]["Num_contrat"];
  echo "</td>";

 echo "</tr>";
}

 $i++; }

echo "</table>";
        
echo"</div>";

?>

  </div>
</div>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

            <script src="affiche2.js"></script>
<script src="layout/scripts/jquery.placeholder.min.js"></script>

</body>
</html>











<?php 
}

?>









