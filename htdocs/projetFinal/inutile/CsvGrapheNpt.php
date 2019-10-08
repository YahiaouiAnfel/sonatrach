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
 $requete= $bdd->prepare("SELECT * FROM npt_exp WHERE date LIKE ?");
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
     $feuille->setCellValueByColumnAndRow(0,1,"x");
   $feuille->setCellValueByColumnAndRow(1,1, "valeur");
  

   $feuille->setCellValueByColumnAndRow(0,2, "Problèmes Puits");
   $feuille->setCellValueByColumnAndRow(0,3, "NPT Sonatrach");
   $feuille->setCellValueByColumnAndRow(0,4, "NPT Entrepreneur");
   $feuille->setCellValueByColumnAndRow(0,5, "NPT Sociétés de Services");
   $feuille->setCellValueByColumnAndRow(0,6, "Attentes Escortes");
   $feuille->setCellValueByColumnAndRow(0,7, "Blocage des mouvements");
for($i=0;$i<$existe;$i++){  
 $feuille->setCellValueByColumnAndRow($j,2, $row[$i]["Problemes_Puits"]);
 $feuille->setCellValueByColumnAndRow($j,3, $row[$i]["NPT_Sonatrach"]);
 $feuille->setCellValueByColumnAndRow($j,4, $row[$i]["NPT_Entrepreneur"]);
 $feuille->setCellValueByColumnAndRow($j,5, $row[$i]["NPT_Societes_de_Services"]);
 $feuille->setCellValueByColumnAndRow($j,6, $row[$i]["Attentes_Escortes"]);
 $feuille->setCellValueByColumnAndRow( $j,7, $row[$i]["Blocage_des_mouvements"]);
$j++;
 }
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\grapheNptExp.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\grapheNptExp.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\grapheNptExp.csv');
 $nom1="./dossierCSV_EXCEL/grapheNptExp.xlsx";
unlink($nom1);
}

$requete= $bdd->prepare("SELECT * FROM npt_dev WHERE date LIKE ?");
                          $requete->execute(array('%'.$date->format('Y-m').'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
 $x=0;
 $j=1;

    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();
     $feuille->setCellValueByColumnAndRow(0,1,"x");
   $feuille->setCellValueByColumnAndRow(1,1, "valeur");
  

   $feuille->setCellValueByColumnAndRow(0,2, "Problèmes Puits");
   $feuille->setCellValueByColumnAndRow(0,3, "NPT Sonatrach");
   $feuille->setCellValueByColumnAndRow(0,4, "NPT Entrepreneur");
   $feuille->setCellValueByColumnAndRow(0,5, "NPT Sociétés de Services");
   $feuille->setCellValueByColumnAndRow(0,6, "Attentes Escortes");
   $feuille->setCellValueByColumnAndRow(0,7, "Blocage des mouvements");
for($i=0;$i<$existe;$i++){  
 $feuille->setCellValueByColumnAndRow($j,2, $row[$i]["Problemes_Puits"]);
 $feuille->setCellValueByColumnAndRow($j,3, $row[$i]["NPT_Sonatrach"]);
 $feuille->setCellValueByColumnAndRow($j,4, $row[$i]["NPT_Entrepreneur"]);
 $feuille->setCellValueByColumnAndRow($j,5, $row[$i]["NPT_Societes_de_Services"]);
 $feuille->setCellValueByColumnAndRow($j,6, $row[$i]["Attentes_Escortes"]);
 $feuille->setCellValueByColumnAndRow( $j,7, $row[$i]["Blocage_des_mouvements"]);
$j++;
 }
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\grapheNptDev.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\grapheNptDev.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\grapheNptDev.csv');
 $nom1="./dossierCSV_EXCEL/grapheNptDev.xlsx";
unlink($nom1);
?>