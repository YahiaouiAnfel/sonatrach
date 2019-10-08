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
$objPHPExcel = PHPExcel_IOFactory::load("C:/xampp/htdocs/projetFinal/dossierCSV_EXCEL/plf.xls");

$sheet = $objPHPExcel->getSheet(6);
$name_sheet = $objPHPExcel->getSheetNames();
 $x=0;
 $j=0;
    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();

foreach($sheet->getRowIterator() as $row) {
if ($x===18) {
  break;
}
if(($x>4)&&($x<18)){
  
 $ligne ="";
 $k=1;
$n=0;
   foreach ($row->getCellIterator() as $cell) {
      if ($k==7) {

        break;
      }
      if ($k==4) {
        $k++;
        continue;
      }

      if ($k==6) {
        $k++;
        continue;
      }
      $ligne =$cell->getValue();
      $feuille->setCellValueByColumnAndRow(0, $j,$name_sheet[6]);
   $feuille->setCellValueByColumnAndRow($n, $j, $ligne);
    $n++;
    $k++;
   } $j++;
 
   }
   $x++;
}
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_dev_nord.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_dev_nord.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_dev_nord.csv');
 $nom1="./dossierCSV_EXCEL/plf_dev_nord.xlsx";
unlink($nom1);


?>
<?php
require_once  'C:/xampp/htdocs/essai/Classes/PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load("C:/xampp/htdocs/projetFinal/dossierCSV_EXCEL/plf.xls");

$sheet = $objPHPExcel->getSheet(7);

 $x=0;
 $j=0;
    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();

foreach($sheet->getRowIterator() as $row) {
if ($x===18) {
  break;
}
if(($x>4)&&($x<18)){
  
 $ligne ="";
 $k=1;
$n=0;
   foreach ($row->getCellIterator() as $cell) {
      if ($k==7) {

        break;
      }
      if ($k==4) {
        $k++;
        continue;
      }

      if ($k==6) {
        $k++;
        continue;
      }
      $ligne =$cell->getValue();
       $feuille->setCellValueByColumnAndRow(0, $j,$name_sheet[7]);
   $feuille->setCellValueByColumnAndRow($n, $j, $ligne);
    $n++;
    $k++;
   } $j++;
 
   }
   $x++;
}
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_dev_centre.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_dev_centre.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_dev_centre.csv');
 $nom1="./dossierCSV_EXCEL/plf_dev_centre.xlsx";
unlink($nom1);


?>
<?php
require_once  'C:/xampp/htdocs/essai/Classes/PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load("C:/xampp/htdocs/projetFinal/dossierCSV_EXCEL/plf.xls");

$sheet = $objPHPExcel->getSheet(8);

 $x=0;
 $j=0;
    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();

foreach($sheet->getRowIterator() as $row) {
if ($x===18) {
  break;
}
if(($x>4)&&($x<18)){
  
 $ligne ="";
 $k=1;
$n=0;
   foreach ($row->getCellIterator() as $cell) {
      if ($k==7) {

        break;
      }
      if ($k==4) {
        $k++;
        continue;
      }

      if ($k==6) {
        $k++;
        continue;
      }
      $ligne =$cell->getValue();
       $feuille->setCellValueByColumnAndRow(0, $j,$name_sheet[8]);
   $feuille->setCellValueByColumnAndRow($n, $j, $ligne);
    $n++;
    $k++;
   } $j++;
 
   }
   $x++;
}
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_dev_sud.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_dev_sud.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_dev_sud.csv');
 $nom1="./dossierCSV_EXCEL/plf_dev_sud.xlsx";
unlink($nom1);


?>
<?php
require_once  'C:/xampp/htdocs/essai/Classes/PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load("C:/xampp/htdocs/projetFinal/dossierCSV_EXCEL/plf.xls");

$sheet = $objPHPExcel->getSheet(2);

 $x=0;
 $j=0;
    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();

foreach($sheet->getRowIterator() as $row) {
if ($x===18) {
  break;
}
if(($x>4)&&($x<18)){
  
 $ligne ="";
 $k=1;
$n=0;
   foreach ($row->getCellIterator() as $cell) {
      if ($k==7) {

        break;
      }
      if ($k==4) {
        $k++;
        continue;
      }

      if ($k==6) {
        $k++;
        continue;
      }
      $ligne =$cell->getValue();
       $feuille->setCellValueByColumnAndRow(0, $j,$name_sheet[2]);
   $feuille->setCellValueByColumnAndRow($n, $j, $ligne);
    $n++;
    $k++;
   } $j++;
 
   }
   $x++;
}
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_exp_nord.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_exp_nord.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_exp_nord.csv');
 $nom1="./dossierCSV_EXCEL/plf_exp_nord.xlsx";
unlink($nom1);


?>
<?php
require_once  'C:/xampp/htdocs/essai/Classes/PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load("C:/xampp/htdocs/projetFinal/dossierCSV_EXCEL/plf.xls");

$sheet = $objPHPExcel->getSheet(3);

 $x=0;
 $j=0;
    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();

foreach($sheet->getRowIterator() as $row) {
if ($x===18) {
  break;
}
if(($x>4)&&($x<18)){
  
 $ligne ="";
 $k=1;
$n=0;
   foreach ($row->getCellIterator() as $cell) {
      if ($k==7) {

        break;
      }
      if ($k==4) {
        $k++;
        continue;
      }

      if ($k==6) {
        $k++;
        continue;
      }
      $ligne =$cell->getValue();
       $feuille->setCellValueByColumnAndRow(0, $j,$name_sheet[3]);
   $feuille->setCellValueByColumnAndRow($n, $j, $ligne);
    $n++;
    $k++;
   } $j++;
 
   }
   $x++;
}
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_exp_centre.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_exp_centre.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_exp_centre.csv');
 $nom1="./dossierCSV_EXCEL/plf_exp_centre.xlsx";
unlink($nom1);


?>
<?php
require_once  'C:/xampp/htdocs/essai/Classes/PHPExcel/IOFactory.php';
$objPHPExcel = PHPExcel_IOFactory::load("C:/xampp/htdocs/projetFinal/dossierCSV_EXCEL/plf.xls");

$sheet = $objPHPExcel->getSheet(4);

 $x=0;
 $j=0;
    $classeur = new PHPExcel;
    $classeur->getProperties()->setCreator("Annie Gagnon");
    $classeur->setActiveSheetIndex(0);
    $feuille=$classeur->getActiveSheet();

foreach($sheet->getRowIterator() as $row) {
if ($x===18) {
  break;
}
if(($x>4)&&($x<18)){
  
 $ligne ="";
 $k=1;
$n=0;
   foreach ($row->getCellIterator() as $cell) {
      if ($k==7) {

        break;
      }
      if ($k==4) {
        $k++;
        continue;
      }

      if ($k==6) {
        $k++;
        continue;
      }
      $ligne =$cell->getValue();
       $feuille->setCellValueByColumnAndRow(0, $j,$name_sheet[4]);
   $feuille->setCellValueByColumnAndRow($n, $j, $ligne);
    $n++;
    $k++;
   } $j++;
 
   }
   $x++;
}
$writer = new PHPExcel_Writer_Excel2007($classeur);
$records = 'C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_exp_sud.xlsx';
$writer->save($records);
CSV('C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_exp_sud.xlsx','C:\xampp\htdocs\projetFinal\dossierCSV_EXCEL\plf_exp_sud.csv');
 $nom1="./dossierCSV_EXCEL/plf_exp_sud.xlsx";
unlink($nom1);

unlink("./dossierCSV_EXCEL/plf.xls");
?>