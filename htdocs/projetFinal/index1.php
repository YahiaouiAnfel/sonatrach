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
  <?php
if (file_exists ('dossierCSV_EXCEL/La_liste_des_marchés.xls')) {
include 'ExtractionEtCsvJuridique.php';

}
if(file_exists ('dossierCSV_EXCEL/juridique.csv')){
include 'transformerEnCsv.php';
}

if (file_exists ('dossierCSV_EXCEL/plf.xls')) {
include 'ExtractionEtCsvplf.php';
}
if(file_exists ('dossierCSV_EXCEL/plf_dev_centre.csv')){
include 'transformerEnCsvPlf.php';
}

if (file_exists ('dossierCSV_EXCEL/rhemploi.xls')) {
include 'ExtractionEtCsvrhemploi.php';
}
if(file_exists ('dossierCSV_EXCEL/rhemploi.csv')){
include 'transformerEnCsvrhemploi.php';
}
if (file_exists ('dossierCSV_EXCEL/NPT.xls')) {
include 'ExtractionEtCsvNPT.php';
}
if(file_exists ('dossierCSV_EXCEL/nptdev.csv')){
include 'transformerEnCsvNPT.php';
}
if (file_exists ('dossierCSV_EXCEL/rhformation.xls')) {
include 'ExtractionEtCsvrhformation.php';
}
if(file_exists ('dossierCSV_EXCEL/rhformation.csv')){
include 'transformerEnCsvrhformation.php';
}
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
 echo "<div align='center'>";
echo "<table border='1' >";    
  echo '<th><a style="color:black;" href ="#">PLF Exp Sud</a></th>';    
 echo "<th><a style='color:black;' href ='#'>PLF Exp Centre</a></th>";    
 echo "<th ><a style='color:black;' href ='#'>PLF Exp Nord</a></th>";    
 echo "<tr>";
 echo "<td>";
echo "<a href='./jp_plf_exp_sud.php'><img src='./jp_plf_exp_sud.php' height='100%' width='100%'></a>";
  
  echo "</td>";
  echo "<td >";
echo "<a href='./jp_plf_exp_centre.php'><img src='./jp_plf_exp_centre.php'></a>";

        
  echo "</td>";

 
    echo "<td >";
   
echo "<a href='./jp_plf_exp_nord.php'><img src='./jp_plf_exp_nord.php'></a>";

  echo "</td>";
 echo "</tr>";
echo "</table>";
echo "<table border='1' >";    
  echo "<th ><a style='color:black;' href ='#'>PLF DEV Sud</a></th>";    
 echo "<th><a style='color:black;' href ='#'>PLF DEV Centre</a></th>";    
 echo "<th ><a style='color:black;' href ='#'>PLF DEV Nord </a></th>";    
 echo "<tr>";
 echo "<td>";
echo "<a href='./jp_plf_dev_sud.php'><img src='./jp_plf_dev_sud.php'></a>";
   
   
        
  echo "</td>";
  echo "<td >";
echo "<a href='./jp_plf_dev_centre.php'><img src='./jp_plf_dev_centre.php'></a>";
   
          
  echo "</td>";

 
    echo "<td >";
echo "<a href='./jp_plf_dev_nord.php'><img src='./jp_plf_dev_nord.php'></a>";
    
  echo "</td>";
 echo "</tr>";
echo "</table>";
echo "</div>";
 echo "<div align='center'>";
echo "<table  >";    
  echo "<th ><a style='color:black;'  href ='#'>NPT EXP</a></th>";    
 echo "<th><a style='color:black;' href ='#'>NPT DEV</a></th>";    
 
 echo "<tr>";

  echo "<td>";
    
echo "<a href='./jp_npt_exp.php'><img src='./jp_npt_exp.php'></a>";
  
  echo "</td>";

  echo "<td >";
echo "<a href='./jp_npt_dev.php'><img src='./jp_npt_dev.php'></a>";
    
  echo "</td>";
   
 echo "</tr>";
echo "</table>";
echo "</div>";


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











