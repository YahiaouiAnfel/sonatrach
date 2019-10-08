<?php
$bdname = "sonatrach";
$user = "root";
$pass = "";$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass);
?>

<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/nptdev.csv", "r")) !== FALSE) { 
  $sql="";
  $c2=0;
  $i=0;$x=0;
   while((!(feof($handle2)))&&($x==0)){ $x++;
    $data2 = fgetcsv($handle2,","); 
    $total=(float)$data2[$c2+4]+(float)$data2[$c2+5]+(float)$data2[$c2+6]+(float)$data2[$c2+7]+(float)$data2[$c2+8]+(float)$data2[$c2+9];
     $taux=($total/(float)$data2[$c2+11])*100;
     $temps=(float)$data2[$c2+11]-$total;
    
    $requete2= $bdd->prepare("INSERT INTO  npt_dev (date,historique,Temps_Productif,Problemes_Puits,NPT_Sonatrach,NPT_Entrepreneur,NPT_Societes_de_Services,Attentes_Escortes,Blocage_des_mouvements,Total_NPT,Total_Activite,Taux_NPT) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2],$temps,$data2[$c2+4],$data2[$c2+5],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+9],$total,$data2[$c2+11],$taux));
       } $i++;
   fclose($handle2);
 }  

if(file_exists ('dossierCSV_EXCEL/nptdev.csv')){
  $nom1="./dossierCSV_EXCEL/nptdev.csv";
unlink($nom1);
}
?>
<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/nptexp.csv", "r")) !== FALSE) { 
  $sql="";
  $c2=0;
  $i=0;$x=0;
   while((!(feof($handle2)))&&($x==0)){ $x++;
    $data2 = fgetcsv($handle2,","); 
    $total=(float)$data2[$c2+4]+(float)$data2[$c2+5]+(float)$data2[$c2+6]+(float)$data2[$c2+7]+(float)$data2[$c2+8]+(float)$data2[$c2+9];
     $taux=($total/(float)$data2[$c2+11])*100;
     $temps=(float)$data2[$c2+11]-$total;
    
    $requete2= $bdd->prepare("INSERT INTO  npt_exp (date,historique,Temps_Productif,Problemes_Puits,NPT_Sonatrach,NPT_Entrepreneur,NPT_Societes_de_Services,Attentes_Escortes,Blocage_des_mouvements,Total_NPT,Total_Activite,Taux_NPT) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2],$temps,$data2[$c2+4],$data2[$c2+5],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+9],$total,$data2[$c2+11],$taux));
       } $i++;
   fclose($handle2);
 }  

if(file_exists ('dossierCSV_EXCEL/nptexp.csv')){
  $nom1="./dossierCSV_EXCEL/nptexp.csv";
unlink($nom1);
}
?>
   <body>
 
  </body>
