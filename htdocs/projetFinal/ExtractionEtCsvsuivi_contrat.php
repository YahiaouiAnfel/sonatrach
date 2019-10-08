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
$objPHPExcel = PHPExcel_IOFactory::load("C:/xampp/htdocs/projetFinal/dossierCSV_EXCEL/suivi_contrat.xls");

$sheet = $objPHPExcel->getSheet(1);
$name_sheet = $objPHPExcel->getSheetNames();

 $x=0;
 $j=0;
    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();

foreach($sheet->getRowIterator() as $row) {
 if($x===8){
  
 $ligne ="";
$k=1;
   foreach ($row->getCellIterator() as $cell) {

      $ligne =$cell->getValue();
      $feuille->setCellValueByColumnAndRow(0, $j,$ligne1);
   $feuille->setCellValueByColumnAndRow($k, $j, $ligne);
    $k++;
   } $j++;
 
   }
   else {if($x===6){
  
 $ligne1 ="";$t=0;
   foreach ($row->getCellIterator() as $cell) {
   $t++;
   if($t==7){
          $ligne1 =$cell->getValue();
          }

      } 
     }$x++;}
}
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\contrat.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\contrat.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\contrat.csv');
 $nom1="./dossierCSV_EXCEL/contrat.xlsx";
unlink($nom1);

?>
<?php
?>
