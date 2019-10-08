<?php
$bdname = "sonatrach";
$user = "root";
$pass = "";
session_start();
$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass);
?>
<?php
function CSV($infile,$outfile)
{
    $fileType = PHPExcel_IOFactory::identify($infile);
    $objReader = PHPExcel_IOFactory::createReader($fileType);
    $objReader->setReadDataOnly(true);   
    $objPHPExcel = $objReader->load($infile);    
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
    $objWriter->save($outfile);
}
require_once  'C:/xampp/htdocs/essai/Classes/PHPExcel/IOFactory.php';
$date = new DateTime();
 $requete= $bdd->prepare("SELECT * FROM plf_dev_centre WHERE date LIKE ?");
                          $requete->execute(array('%'.$date->format('Y-m').'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          if ($existe>0) {
                           

                          
 $x=0;
 $j=1;

    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();
     $feuille->setCellValueByColumnAndRow(0,1,"mois");
   $feuille->setCellValueByColumnAndRow(1,1, "prevision");
  $feuille->setCellValueByColumnAndRow(2,1, "fait");

   $feuille->setCellValueByColumnAndRow(0,2, "01");
   $feuille->setCellValueByColumnAndRow(0,3, "02");
   $feuille->setCellValueByColumnAndRow(0,4, "03");
   $feuille->setCellValueByColumnAndRow(0,5, "04");
   $feuille->setCellValueByColumnAndRow(0,6, "05");
   $feuille->setCellValueByColumnAndRow(0,7, "06");
   $feuille->setCellValueByColumnAndRow(0,8, "07");
   $feuille->setCellValueByColumnAndRow(0,9, "08"); 
   $feuille->setCellValueByColumnAndRow(0,10, "09");
   $feuille->setCellValueByColumnAndRow(0,11, "10");
   $feuille->setCellValueByColumnAndRow(0,12, "11");
   $feuille->setCellValueByColumnAndRow(0,13, "12");



for($i=0;$i<$existe;$i++){  
 $feuille->setCellValueByColumnAndRow(1,2, $row[0]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,3, $row[1]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,4, $row[2]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,5, $row[3]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,6, $row[4]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow( 1,7, $row[5]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,8, $row[6]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,9, $row[7]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,10, $row[8]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,11, $row[9]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,12, $row[10]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,13, $row[11]["puitsAlivrer1"]);

    $feuille->setCellValueByColumnAndRow(2,2, $row[0]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,3, $row[1]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,4, $row[2]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,5, $row[3]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,6, $row[4]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow( 2,7, $row[5]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,8, $row[6]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,9, $row[7]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,10, $row[8]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,11, $row[9]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,12, $row[10]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,13, $row[11]["puitslivrer1"]);
$j++;
 }
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfDevCentre.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfDevCentre.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfDevCentre.csv');
 $nom1="./dossierCSV_EXCEL/graphePlfDevCentre.xlsx";
if(file_exists ($nom1)){

unlink($nom1);}
}


 $requete= $bdd->prepare("SELECT * FROM plf_dev_sud WHERE date LIKE ?");
                          $requete->execute(array('%'.$date->format('Y-m').'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          if ($existe>0) {
                           

                          
 $x=0;
 $j=1;

    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();
     $feuille->setCellValueByColumnAndRow(0,1,"mois");
   $feuille->setCellValueByColumnAndRow(1,1, "prevision");
  $feuille->setCellValueByColumnAndRow(2,1, "fait");

   $feuille->setCellValueByColumnAndRow(0,2, "01");
   $feuille->setCellValueByColumnAndRow(0,3, "02");
   $feuille->setCellValueByColumnAndRow(0,4, "03");
   $feuille->setCellValueByColumnAndRow(0,5, "04");
   $feuille->setCellValueByColumnAndRow(0,6, "05");
   $feuille->setCellValueByColumnAndRow(0,7, "06");
   $feuille->setCellValueByColumnAndRow(0,8, "07");
   $feuille->setCellValueByColumnAndRow(0,9, "08"); 
   $feuille->setCellValueByColumnAndRow(0,10, "09");
   $feuille->setCellValueByColumnAndRow(0,11, "10");
   $feuille->setCellValueByColumnAndRow(0,12, "11");
   $feuille->setCellValueByColumnAndRow(0,13, "12");



for($i=0;$i<$existe;$i++){  
 $feuille->setCellValueByColumnAndRow(1,2, $row[0]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,3, $row[1]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,4, $row[2]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,5, $row[3]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,6, $row[4]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow( 1,7, $row[5]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,8, $row[6]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,9, $row[7]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,10, $row[8]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,11, $row[9]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,12, $row[10]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,13, $row[11]["puitsAlivrer1"]);

    $feuille->setCellValueByColumnAndRow(2,2, $row[0]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,3, $row[1]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,4, $row[2]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,5, $row[3]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,6, $row[4]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow( 2,7, $row[5]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,8, $row[6]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,9, $row[7]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,10, $row[8]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,11, $row[9]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,12, $row[10]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,13, $row[11]["puitslivrer1"]);
$j++;
 }
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfDevSud.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfDevSud.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfDevSud.csv');
 $nom1="./dossierCSV_EXCEL/graphePlfDevSud.xlsx";
if(file_exists ($nom1)){

unlink($nom1);}
}


 $requete= $bdd->prepare("SELECT * FROM plf_dev_nord WHERE date LIKE ?");
                          $requete->execute(array('%'.$date->format('Y-m').'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          if ($existe>0) {
                           

                          
 $x=0;
 $j=1;

    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();
     $feuille->setCellValueByColumnAndRow(0,1,"mois");
   $feuille->setCellValueByColumnAndRow(1,1, "prevision");
  $feuille->setCellValueByColumnAndRow(2,1, "fait");

   $feuille->setCellValueByColumnAndRow(0,2, "01");
   $feuille->setCellValueByColumnAndRow(0,3, "02");
   $feuille->setCellValueByColumnAndRow(0,4, "03");
   $feuille->setCellValueByColumnAndRow(0,5, "04");
   $feuille->setCellValueByColumnAndRow(0,6, "05");
   $feuille->setCellValueByColumnAndRow(0,7, "06");
   $feuille->setCellValueByColumnAndRow(0,8, "07");
   $feuille->setCellValueByColumnAndRow(0,9, "08"); 
   $feuille->setCellValueByColumnAndRow(0,10, "09");
   $feuille->setCellValueByColumnAndRow(0,11, "10");
   $feuille->setCellValueByColumnAndRow(0,12, "11");
   $feuille->setCellValueByColumnAndRow(0,13, "12");



for($i=0;$i<$existe;$i++){  
 $feuille->setCellValueByColumnAndRow(1,2, $row[0]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,3, $row[1]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,4, $row[2]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,5, $row[3]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,6, $row[4]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow( 1,7, $row[5]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,8, $row[6]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,9, $row[7]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,10, $row[8]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,11, $row[9]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,12, $row[10]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,13, $row[11]["puitsAlivrer1"]);

    $feuille->setCellValueByColumnAndRow(2,2, $row[0]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,3, $row[1]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,4, $row[2]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,5, $row[3]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,6, $row[4]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow( 2,7, $row[5]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,8, $row[6]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,9, $row[7]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,10, $row[8]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,11, $row[9]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,12, $row[10]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,13, $row[11]["puitslivrer1"]);
$j++;
 }
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfDevNord.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfDevNord.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfDevNord.csv');
 $nom1="./dossierCSV_EXCEL/graphePlfDevNord.xlsx";
if(file_exists ($nom1)){

unlink($nom1);}
}


 $requete= $bdd->prepare("SELECT * FROM plf_exp_centre WHERE date LIKE ?");
                          $requete->execute(array('%'.$date->format('Y-m').'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          if ($existe>0) {
                           

                          
 $x=0;
 $j=1;

    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();
     $feuille->setCellValueByColumnAndRow(0,1,"mois");
   $feuille->setCellValueByColumnAndRow(1,1, "prevision");
  $feuille->setCellValueByColumnAndRow(2,1, "fait");

   $feuille->setCellValueByColumnAndRow(0,2, "01");
   $feuille->setCellValueByColumnAndRow(0,3, "02");
   $feuille->setCellValueByColumnAndRow(0,4, "03");
   $feuille->setCellValueByColumnAndRow(0,5, "04");
   $feuille->setCellValueByColumnAndRow(0,6, "05");
   $feuille->setCellValueByColumnAndRow(0,7, "06");
   $feuille->setCellValueByColumnAndRow(0,8, "07");
   $feuille->setCellValueByColumnAndRow(0,9, "08"); 
   $feuille->setCellValueByColumnAndRow(0,10, "09");
   $feuille->setCellValueByColumnAndRow(0,11, "10");
   $feuille->setCellValueByColumnAndRow(0,12, "11");
   $feuille->setCellValueByColumnAndRow(0,13, "12");



for($i=0;$i<$existe;$i++){  
 $feuille->setCellValueByColumnAndRow(1,2, $row[0]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,3, $row[1]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,4, $row[2]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,5, $row[3]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,6, $row[4]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow( 1,7, $row[5]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,8, $row[6]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,9, $row[7]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,10, $row[8]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,11, $row[9]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,12, $row[10]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,13, $row[11]["puitsAlivrer1"]);

    $feuille->setCellValueByColumnAndRow(2,2, $row[0]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,3, $row[1]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,4, $row[2]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,5, $row[3]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,6, $row[4]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow( 2,7, $row[5]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,8, $row[6]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,9, $row[7]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,10, $row[8]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,11, $row[9]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,12, $row[10]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,13, $row[11]["puitslivrer1"]);
$j++;
 }
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfExpCentre.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfExpCentre.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfExpCentre.csv');
 $nom1="./dossierCSV_EXCEL/graphePlfExpCentre.xlsx";
if(file_exists ($nom1)){

unlink($nom1);}
}



 $requete= $bdd->prepare("SELECT * FROM plf_exp_sud WHERE date LIKE ?");
                          $requete->execute(array('%'.$date->format('Y-m').'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          if ($existe>0) {
                           

                          
 $x=0;
 $j=1;

    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();
     $feuille->setCellValueByColumnAndRow(0,1,"mois");
   $feuille->setCellValueByColumnAndRow(1,1, "prevision");
  $feuille->setCellValueByColumnAndRow(2,1, "fait");

   $feuille->setCellValueByColumnAndRow(0,2, "01");
   $feuille->setCellValueByColumnAndRow(0,3, "02");
   $feuille->setCellValueByColumnAndRow(0,4, "03");
   $feuille->setCellValueByColumnAndRow(0,5, "04");
   $feuille->setCellValueByColumnAndRow(0,6, "05");
   $feuille->setCellValueByColumnAndRow(0,7, "06");
   $feuille->setCellValueByColumnAndRow(0,8, "07");
   $feuille->setCellValueByColumnAndRow(0,9, "08"); 
   $feuille->setCellValueByColumnAndRow(0,10, "09");
   $feuille->setCellValueByColumnAndRow(0,11, "10");
   $feuille->setCellValueByColumnAndRow(0,12, "11");
   $feuille->setCellValueByColumnAndRow(0,13, "12");



for($i=0;$i<$existe;$i++){  
 $feuille->setCellValueByColumnAndRow(1,2, $row[0]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,3, $row[1]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,4, $row[2]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,5, $row[3]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,6, $row[4]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow( 1,7, $row[5]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,8, $row[6]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,9, $row[7]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,10, $row[8]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,11, $row[9]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,12, $row[10]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,13, $row[11]["puitsAlivrer1"]);

    $feuille->setCellValueByColumnAndRow(2,2, $row[0]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,3, $row[1]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,4, $row[2]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,5, $row[3]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,6, $row[4]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow( 2,7, $row[5]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,8, $row[6]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,9, $row[7]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,10, $row[8]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,11, $row[9]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,12, $row[10]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,13, $row[11]["puitslivrer1"]);
$j++;
 }
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfExpSud.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfExpSud.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfExpSud.csv');
 $nom1="./dossierCSV_EXCEL/graphePlfExpSud.xlsx";
if(file_exists ($nom1)){

unlink($nom1);}
}

 $requete= $bdd->prepare("SELECT * FROM plf_exp_nord WHERE date LIKE ?");
                          $requete->execute(array('%'.$date->format('Y-m').'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          if ($existe>0) {
                           

                          
 $x=0;
 $j=1;

    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();
     $feuille->setCellValueByColumnAndRow(0,1,"mois");
   $feuille->setCellValueByColumnAndRow(1,1, "prevision");
  $feuille->setCellValueByColumnAndRow(2,1, "fait");

   $feuille->setCellValueByColumnAndRow(0,2, "01");
   $feuille->setCellValueByColumnAndRow(0,3, "02");
   $feuille->setCellValueByColumnAndRow(0,4, "03");
   $feuille->setCellValueByColumnAndRow(0,5, "04");
   $feuille->setCellValueByColumnAndRow(0,6, "05");
   $feuille->setCellValueByColumnAndRow(0,7, "06");
   $feuille->setCellValueByColumnAndRow(0,8, "07");
   $feuille->setCellValueByColumnAndRow(0,9, "08"); 
   $feuille->setCellValueByColumnAndRow(0,10, "09");
   $feuille->setCellValueByColumnAndRow(0,11, "10");
   $feuille->setCellValueByColumnAndRow(0,12, "11");
   $feuille->setCellValueByColumnAndRow(0,13, "12");



for($i=0;$i<$existe;$i++){  
 $feuille->setCellValueByColumnAndRow(1,2, $row[0]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,3, $row[1]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,4, $row[2]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,5, $row[3]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow(1,6, $row[4]["puitsAlivrer1"]);
 $feuille->setCellValueByColumnAndRow( 1,7, $row[5]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,8, $row[6]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,9, $row[7]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,10, $row[8]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,11, $row[9]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,12, $row[10]["puitsAlivrer1"]);
   $feuille->setCellValueByColumnAndRow(1,13, $row[11]["puitsAlivrer1"]);

    $feuille->setCellValueByColumnAndRow(2,2, $row[0]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,3, $row[1]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,4, $row[2]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,5, $row[3]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow(2,6, $row[4]["puitslivrer1"]);
 $feuille->setCellValueByColumnAndRow( 2,7, $row[5]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,8, $row[6]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,9, $row[7]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,10, $row[8]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,11, $row[9]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,12, $row[10]["puitslivrer1"]);
   $feuille->setCellValueByColumnAndRow(2,13, $row[11]["puitslivrer1"]);
$j++;
 }
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfExpNord.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfExpNord.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\graphePlfExpNord.csv');
 $nom1="./dossierCSV_EXCEL/graphePlfExpNord.xlsx";
if(file_exists ($nom1)){

unlink($nom1);}
}


?>