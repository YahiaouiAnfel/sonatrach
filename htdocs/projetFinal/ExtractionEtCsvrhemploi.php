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
$objPHPExcel = PHPExcel_IOFactory::load("C:/xampp/htdocs/projetFinal/dossierCSV_EXCEL/rhemploi.xls");

$sheet = $objPHPExcel->getSheet(3);
$name_sheet = $objPHPExcel->getSheetNames();

 $x=0;
 $j=0;
    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();

foreach($sheet->getRowIterator() as $row) {
 if($x===3){
  
 $ligne ="";
$k=1;
   foreach ($row->getCellIterator() as $cell) {
  $ligne =$cell->getValue();
  if(($ligne=="NB :  - Ecrire l'Intitulé du poste à pourvoir, tel qu'il est mentionné dans la table des codes fonctions. ")||($ligne=="         - Toutes les rubriques doivent être saisies en majuscule.")||($ligne=="(*) A préciser : (1) Recrutement Direct    -  (2) Retours de formation ")){break;}else{
      $feuille->setCellValueByColumnAndRow(0, $j,$ligne1);
   $feuille->setCellValueByColumnAndRow($k, $j, $ligne);
    $k++;
  } } $j++;
 
   }
   else {if($x===2){
  
 $ligne1 ="";$t=0;
   foreach ($row->getCellIterator() as $cell) {
   $t++;
   if($t==14){
          $ligne1 =$cell->getValue();
          }

      } 
     }$x++;}
}
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\rhemploi.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\rhemploi.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\rhemploi.csv');
 $nom1="./dossierCSV_EXCEL/rhemploi.xlsx";
unlink($nom1);
unlink("./dossierCSV_EXCEL/rhemploi.xls");
?>