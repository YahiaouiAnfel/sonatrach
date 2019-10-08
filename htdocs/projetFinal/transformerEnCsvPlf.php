<?php
$bdname = "sonatrach";
$user = "root";
$pass = "";$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass);
?>

<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/plf_dev_centre.csv", "r")) !== FALSE) { 
	$sql="";
	$c2=0;
	$i=0;
	 while(!(feof($handle2))){ 
	 	$data2 = fgetcsv($handle2,",");	
	 	$requete1= $bdd->prepare("SELECT * FROM plf_dev_centre");
        $requete1->execute(array());
        $row = $requete1->fetchAll(PDO::FETCH_ASSOC);
         $existe= $requete1->rowCount();
         $l=0;$trouve=0;
 while (($l<$existe)&&($trouve===0)){
            if(($data2[$c2]===$row[$l]["historique"])&&($data2[$c2+1]===$row[$l]["mois"])){
              $trouve=1;
              break;
            }
            else{
              $l++;
            }
        }
          if($trouve===1){
$requete1= $bdd->prepare("UPDATE plf_dev_centre SET date=?,puitsAlivrer1=?,puitslivrer1=? WHERE  mois=? AND historique=? ");
        $requete1->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));

    }
else{

    if($data21$c2+5]==""){break;}

	 	$requete2= $bdd->prepare("INSERT INTO plf_dev_centre (date,puitsAlivrer1,puitslivrer1,mois,historique) VALUES (?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));
       } $i++;
	}
    fclose($handle2);
}
if(file_exists ('dossierCSV_EXCEL/plf_dev_centre.csv')){
  $nom1="./dossierCSV_EXCEL/plf_dev_centre.csv";
unlink($nom1);
}
?>
<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/plf_dev_sud.csv", "r")) !== FALSE) { 
  $sql="";
  $c2=0;
  $i=0;
   while(!(feof($handle2))){ 
    $data2 = fgetcsv($handle2,","); 
    $requete1= $bdd->prepare("SELECT * FROM plf_dev_sud");
        $requete1->execute(array());
        $row = $requete1->fetchAll(PDO::FETCH_ASSOC);
         $existe= $requete1->rowCount();
         $l=0;$trouve=0;
 while (($l<$existe)&&($trouve===0)){
            if(($data2[$c2]===$row[$l]["historique"])&&($data2[$c2+1]===$row[$l]["mois"])){
              $trouve=1;
              break;
            }
            else{
              $l++;
            }
        }
          if($trouve===1){
$requete1= $bdd->prepare("UPDATE plf_dev_sud SET date=?,puitsAlivrer1=?,puitslivrer1=? WHERE  mois=? AND historique=? ");
        $requete1->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));

    }
else{
    if($data2[$c2+1]==""){break;}

    $requete2= $bdd->prepare("INSERT INTO plf_dev_sud(date,puitsAlivrer1,puitslivrer1,mois,historique) VALUES (?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));
       } $i++;
  }
    fclose($handle2);
}
if(file_exists ('dossierCSV_EXCEL/plf_dev_sud.csv')){
  $nom1="./dossierCSV_EXCEL/plf_dev_sud.csv";
unlink($nom1);
}
?>
<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/plf_dev_nord.csv", "r")) !== FALSE) { 
  $sql="";
  $c2=0;
  $i=0;
   while(!(feof($handle2))){ 
    $data2 = fgetcsv($handle2,","); 
    $requete1= $bdd->prepare("SELECT * FROM plf_dev_nord");
        $requete1->execute(array());
        $row = $requete1->fetchAll(PDO::FETCH_ASSOC);
         $existe= $requete1->rowCount();
         $l=0;$trouve=0;
 while (($l<$existe)&&($trouve===0)){
            if(($data2[$c2]===$row[$l]["historique"])&&($data2[$c2+1]===$row[$l]["mois"])){
              $trouve=1;
              break;
            }
            else{
              $l++;
            }
        }
          if($trouve===1){
$requete1= $bdd->prepare("UPDATE plf_dev_nord SET date=?,puitsAlivrer1=?,puitslivrer1=? WHERE  mois=? AND historique=? ");
        $requete1->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));

    }
else{
    if($data2[$c2+1]==""){break;}

    $requete2= $bdd->prepare("INSERT INTO plf_dev_nord (date,puitsAlivrer1,puitslivrer1,mois,historique) VALUES (?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));
       } $i++;
  }
    fclose($handle2);
}
if(file_exists ('dossierCSV_EXCEL/plf_dev_nord.csv')){
  $nom1="./dossierCSV_EXCEL/plf_dev_nord.csv";
unlink($nom1);
}
?>
<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/plf_exp_centre.csv", "r")) !== FALSE) { 
  $sql="";
  $c2=0;
  $i=0;
   while(!(feof($handle2))){ 
    $data2 = fgetcsv($handle2,","); 
    $requete1= $bdd->prepare("SELECT * FROM plf_exp_centre");
        $requete1->execute(array());
        $row = $requete1->fetchAll(PDO::FETCH_ASSOC);
         $existe= $requete1->rowCount();
         $l=0;$trouve=0;
 while (($l<$existe)&&($trouve===0)){
            if(($data2[$c2]===$row[$l]["historique"])&&($data2[$c2+1]===$row[$l]["mois"])){
              $trouve=1;
              break;
            }
            else{
              $l++;
            }
        }
          if($trouve===1){
$requete1= $bdd->prepare("UPDATE plf_exp_centre SET date=?,puitsAlivrer1=?,puitslivrer1=? WHERE  mois=? AND historique=? ");
        $requete1->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));

    }
else{
    if($data2[$c2+1]==""){break;}

    $requete2= $bdd->prepare("INSERT INTO plf_exp_centre (date,puitsAlivrer1,puitslivrer1,mois,historique) VALUES (?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));
       } $i++;
  }
    fclose($handle2);
}
if(file_exists ('dossierCSV_EXCEL/plf_exp_centre.csv')){
  $nom1="./dossierCSV_EXCEL/plf_exp_centre.csv";
unlink($nom1);
}
?>
<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/plf_exp_sud.csv", "r")) !== FALSE) { 
  $sql="";
  $c2=0;
  $i=0;
   while(!(feof($handle2))){ 
    $data2 = fgetcsv($handle2,","); 
    $requete1= $bdd->prepare("SELECT * FROM plf_exp_sud");
        $requete1->execute(array());
        $row = $requete1->fetchAll(PDO::FETCH_ASSOC);
         $existe= $requete1->rowCount();
         $l=0;$trouve=0;
 while (($l<$existe)&&($trouve===0)){
            if(($data2[$c2]===$row[$l]["historique"])&&($data2[$c2+1]===$row[$l]["mois"])){
              $trouve=1;
              break;
            }
            else{
              $l++;
            }
        }
          if($trouve===1){
$requete1= $bdd->prepare("UPDATE plf_exp_sud SET date=?,puitsAlivrer1=?,puitslivrer1=? WHERE  mois=? AND historique=? ");
        $requete1->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));

    }
else{
    if($data2[$c2+1]==""){break;}

    $requete2= $bdd->prepare("INSERT INTO plf_exp_sud (date,puitsAlivrer1,puitslivrer1,mois,historique) VALUES (?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));
       } $i++;
  }
    fclose($handle2);
}
if(file_exists ('dossierCSV_EXCEL/plf_exp_sud.csv')){
  $nom1="./dossierCSV_EXCEL/plf_exp_sud.csv";
unlink($nom1);
}
?>
<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/plf_exp_nord.csv", "r")) !== FALSE) { 
  $sql="";
  $c2=0;
  $i=0;
   while(!(feof($handle2))){ 
    $data2 = fgetcsv($handle2,","); 
    $requete1= $bdd->prepare("SELECT * FROM plf_exp_nord");
        $requete1->execute(array());
        $row = $requete1->fetchAll(PDO::FETCH_ASSOC);
         $existe= $requete1->rowCount();
         $l=0;$trouve=0;
 while (($l<$existe)&&($trouve===0)){
            if(($data2[$c2]===$row[$l]["historique"])&&($data2[$c2+1]===$row[$l]["mois"])){
              $trouve=1;
              break;
            }
            else{
              $l++;
            }
        }
          if($trouve===1){
$requete1= $bdd->prepare("UPDATE plf_exp_nord SET date=?,puitsAlivrer1=?,puitslivrer1=? WHERE  mois=? AND historique=? ");
        $requete1->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));

    }
else{
    if($data2[$c2+1]==""){break;}

    $requete2= $bdd->prepare("INSERT INTO plf_exp_nord (date,puitsAlivrer1,puitslivrer1,mois,historique) VALUES (?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+1],$data2[$c2]));
       } $i++;
  }
    fclose($handle2);
}
if(file_exists ('dossierCSV_EXCEL/plf_exp_nord.csv')){
  $nom1="./dossierCSV_EXCEL/plf_exp_nord.csv";
unlink($nom1);
}
?>