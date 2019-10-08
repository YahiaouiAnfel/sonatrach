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
 






</div><body style="background-color: white">
  <?php
   $date = new DateTime();
   echo "<div align='center'>";

   echo '<h2 class="centre" style="color:black">Catégorie de formation</h2>';
   
                           echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>1</th>";    
                           echo "<th class='table warning '>2</th>";    
                           echo "<th class='table warning '>3</th>"; 
                          
                         echo "<tr>";
                      echo "<td class='table warning'>Actions d'adaptation  au poste de travail </td>";   
                           echo "<td class='table warning'>Actions liées à l'évolution des métiers et technologies  </td>";    
                           echo "<td class='table warning'>Actions liées au développement des compétences </td>";           
                         
                        echo "</tr>";

                        echo "</table>";



   echo '<h2 class="centre" style="color:black">Type de Formation </h2>';
   
                           echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>1</th>";    
                           echo "<th class='table warning '>2</th>";    
                           echo "<th class='table warning '>3</th>"; 
                            echo "<th class='table warning '>4</th>";    
                           echo "<th class='table warning '>5</th>";    
                           echo "<th class='table warning '>6</th>"; 
                          
                         echo "<tr>";
                      echo "<td class='table warning'>Formation et recrutement  </td>";   
                           echo "<td class='table warning'>Perfectionnement </td>";    
                           echo "<td class='table warning'>Formation de reconversion </td>";           
                          echo "<td class='table warning'>Stages Fournisseurs </td>";   
                           echo "<td class='table warning'>Formation Induction </td>";    
                           echo "<td class='table warning'>Formation Corporate </td>";           
                         
                        echo "</tr>";

                        echo "</table>";
                           


   echo '<h2 class="centre" style="color:black">Code formation </h2>';
   
                           echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>CDI</th>";    
                           echo "<th class='table warning '>CDA</th>";    
                           echo "<th class='table warning '>CDE</th>"; 
                            echo "<th class='table warning '>LDI</th>";    
                           echo "<th class='table warning '>LDA</th>";    
                           echo "<th class='table warning '>LDE</th>"; 
                          
                         echo "<tr>";
                      echo "<td class='table warning'>Formation de courte durée en Intra entreprise </td>";   
                           echo "<td class='table warning'>Formation de courte durée en Algérie </td>";    
                           echo "<td class='table warning'>Formation de courte durée à l'étranger </td>";           
                          echo "<td class='table warning'>Formation de longue durée en Intra entreprise </td>";   
                           echo "<td class='table warning'>Formation de longue durée en Algérie </td>";    
                           echo "<td class='table warning'>Formation de longue durée à l'étranger</td>";           
                         
                        echo "</tr>";

                        echo "</table>";
                           


   echo '<h2 class="centre" style="color:black">CSP</h2>';
   
                           echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>Cadre </th>";    
                           echo "<th class='table warning '>Maîtrise</th>";    
                           echo "<th class='table warning '>Exécution </th>"; 
                       
                          
                         echo "<tr>";
                      echo "<td class='table warning'>Agent occupant un poste classé à l'échelle 21 et plus </td>";   
                           echo "<td class='table warning'>Agent occupant un poste classé entre l'échelle 15 et 20 </td>";    
                           echo "<td class='table warning'>Agent occupant un poste dont l'échelle est inferieure à 15.</td>";           
                         
                        echo "</tr>";

                        echo "</table>";
                           



   echo '<h2 class="centre" style="color:black">Organisme</h2>';
   
                           echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>IAP </th>";    
                           echo "<th class='table warning '>CE</th>";    
                           echo "<th class='table warning '>AO </th>"; 
                           echo "<th class='table warning '>ETR </th>"; 

                       
                          
                         echo "<tr>";
                      echo "<td class='table warning'>Institut Algérien du Pétrole</td>";   
                           echo "<td class='table warning'>Centres de Formation Activités </td>";    
                           echo "<td class='table warning'>Autres Organismes Algérie</td>";           
                           echo "<td class='table warning'>Etranger</td>";           

                         
                        echo "</tr>";

                        echo "</table>";


   echo '<h2 class="centre" style="color:black">Fonction</h2>';
   
                           echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>FCM </th>";    
                           echo "<th class='table warning '>FST</th>";    
                           echo "<th class='table warning '>FSP </th>"; 
                          
                       
                          
                         echo "<tr>";
                      echo "<td class='table warning'>Fonction Cœurs de métier </td>";   
                           echo "<td class='table warning'>Fonction de Soutien </td>";    
                           echo "<td class='table warning'>Fonction de Support </td>";           
               

                         
                        echo "</tr>";

                        echo "</table>";


   echo '<h2 class="centre" style="color:black">Type de Formation </h2>';
   
                           echo "<table border='1' class=' table table-bordered table-striped table-responsive table-hover table-condensed' style='color:black'>";    
                           echo "<th class='table warning '>code</th>";    
                           echo "<th class='table warning '>domaine</th>";    
                  
                          
                         echo "<tr>";
                            echo "<td class='table warning'>1</td>";   
                            echo "<td class='table warning'>Exploration</td>";    
                         echo "</tr>";
                            echo "<tr>";
                            echo "<td class='table warning'>1.1</td>";   
                            echo "<td class='table warning'>Shales gaz </td>";    
                         echo "</tr>";
                            echo "<tr>";
                            echo "<td class='table warning'>1.2</td>";   
                            echo "<td class='table warning'>Off-shore</td>";    
                         echo "</tr>";
                            echo "<tr>";
                            echo "<td class='table warning'>2</td>";   
                            echo "<td class='table warning'>Forage</td>";    
                         echo "</tr>";
                            echo "<tr>";
                            echo "<td class='table warning'>3</td>";   
                            echo "<td class='table warning'>Réservoir Engineering </td>";    
                         echo "</tr>";
                            echo "<tr>";
                            echo "<td class='table warning'>4</td>";   
                            echo "<td class='table warning'>Exploitation/Développement Gis</td>";    
                         echo "</tr>";
                            echo "<tr>";
                            echo "<td class='table warning'>5</td>";   
                            echo "<td class='table warning'>Transport HC    
</td>";    
                         echo "</tr>";
                            echo "<tr>";
                            echo "<td class='table warning'>5.1</td>";   
                            echo "<td class='table warning'>      - Corrosion   
</td>";    
                         echo "</tr>";

                            echo "<tr>";
                            echo "<td class='table warning'>6</td>";   
                            echo "<td class='table warning'>Transformation HC   
</td>";    
                         echo "</tr>";
                            echo "<tr>";
                            echo "<td class='table warning'>6.1</td>";   
                            echo "<td class='table warning'>Raffinage/pétrochimie   
</td>";    
                         echo "</tr>";
                            echo "<tr>";
                            echo "<td class='table warning'>7</td>";   
                            echo "<td class='table warning'>Commercialisation HC    
</td>";    
                         echo "</tr>";
                            echo "<tr>";
                            echo "<td class='table warning'>7.1</td>";   
                            echo "<td class='table warning'>Négociation</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>8</td>";   
                            echo "<td class='table warning'>Maintenance Industrielle    
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>9</td>";   
                            echo "<td class='table warning'>Sécurité Industrielle   
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>10</td>";   
                            echo "<td class='table warning'>Environnement   
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>30</td>";   
                            echo "<td class='table warning'>Engineering & Suivi réalisation     
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>11</td>";   
                            echo "<td class='table warning'>Etudes/Economie   
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>12</td>";   
                            echo "<td class='table warning'>Management de Projets   
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>13</td>";   
                            echo "<td class='table warning'>Business Développement    
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>14</td>";   
                            echo "<td class='table warning'>Organisation/Planification    
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>15</td>";   
                            echo "<td class='table warning'>Contrôle de qualité / Coûts   
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>16</td>";   
                            echo "<td class='table warning'>N.T.I.C     
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>17</td>";   
                            echo "<td class='table warning'>Management    
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>18</td>";   
                            echo "<td class='table warning'>Ressources Humaines   
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>19</td>";   
                            echo "<td class='table warning'>Finances/Comptabilité   
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>20</td>";   
                            echo "<td class='table warning'>Fiscalité/Assurances    
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>21</td>";   
                            echo "<td class='table warning'>Juridique   
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>22</td>";   
                            echo "<td class='table warning'>Audit   
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>23</td>";   
                            echo "<td class='table warning'>Santé et médecine du travail    
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>24</td>";   
                            echo "<td class='table warning'>Langues   
</td>";    
                         echo "</tr>";
                         echo "<tr>";
                            echo "<td class='table warning'>25</td>";   
                            echo "<td class='table warning'>Gestion Personnel   
</td>";    
                         echo "</tr>";
                          echo "<tr>";
                            echo "<td class='table warning'>26</td>";   
                            echo "<td class='table warning'>Communication   
</td>";    
                         echo "</tr>";
                          echo "<tr>";
                            echo "<td class='table warning'>27</td>";   
                            echo "<td class='table warning'>Approvisionnement & MOG</td>";    
                         echo "</tr>";
                          echo "<tr>";
                            echo "<td class='table warning'>28</td>";   
                            echo "<td class='table warning'>Bureautique 
</td>";    
                         echo "</tr>";
                          echo "<tr>";
                            echo "<td class='table warning'>29</td>";   
                            echo "<td class='table warning'>Œuvres Sociales
</td>";    
                         echo "</tr>";
                          echo "<tr>";
                            echo "<td class='table warning'>31</td>";   
                            echo "<td class='table warning'>Sûreté Interne d'Etablissement    
</td>";    
                         echo "</tr>";
                        echo "</table>";
                           

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











