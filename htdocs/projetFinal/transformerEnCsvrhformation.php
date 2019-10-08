<?php
$bdname = "sonatrach";
$user = "root";
$pass = "";$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass);
?>

<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/rhformation.csv", "r")) !== FALSE) { 
	$sql="";
	$c2=0;
	$i=0;
	 while(!(feof($handle2))){ 
	 	$data2 = fgetcsv($handle2,",");	
	 	$requete1= $bdd->prepare("SELECT * FROM rh_formation");
        $requete1->execute(array());
        $row = $requete1->fetchAll(PDO::FETCH_ASSOC);
         $existe= $requete1->rowCount();
         $l=0;$trouve=0;

        while (($l<$existe)&&($trouve===0)){
        		if(($data2[$c2+2]===$row[$l]["matricule"])&&($data2[$c2+9]===$row[$l]["code_formation"])){
        			$trouve=1;
              break;
        		}
        		else{
        			$l++;
        		}
        }
    
	 	if($trouve===1){
$requete1= $bdd->prepare("UPDATE rh_formation SET date=?,structure =?,nom_prenom=?,CSP=?,domaine=?,intitule_formation=?,categorie_formation=?,type_formation=?,code_organisme=?,organisme_formation=?,lieu_deroulement_formation=?,lieu=?,H_J=?,pedagogie=?,hebergement_restauration=?,transport=?,presalaire=?,autres_charges=?,cout_global=?,dont_devise=?,prevision=? WHERE  matricule=? AND code_formation=? AND historique= ?");
        $requete1->execute(array($date->format('Y-m-d'),$data2[$c2+1],$data2[$c2+3],$data2[$c2+4],$data2[$c2+5],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+10],$data2[$c2+11],$data2[$c2+12],$data2[$c2+13],$data2[$c2+14],$data2[$c2+15],$data2[$c2+16],$data2[$c2+17],$data2[$c2+18],$data2[$c2+19],$data2[$c2+20],$data2[$c2+21],$data2[$c2+22],$data2[$c2+2],$data2[$c2+9],$data2[$c2]));

	 	}
	 else{
    if($data2[$c2+3]==""){break;}
	 	
	 	$requete2= $bdd->prepare("INSERT INTO rh_formation (date,historique,structure,matricule,nom_prenom,CSP,domaine,intitule_formation,categorie_formation,type_formation,code_formation,code_organisme,organisme_formation,lieu_deroulement_formation,lieu,H_J,pedagogie,hebergement_restauration,transport,presalaire,autres_charges,cout_global,dont_devise,prevision) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2],$data2[$c2+1],$data2[$c2+2],$data2[$c2+3],$data2[$c2+4],$data2[$c2+5],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+9],$data2[$c2+10],$data2[$c2+11],$data2[$c2+12],$data2[$c2+13],$data2[$c2+14],$data2[$c2+15],$data2[$c2+16],$data2[$c2+17],$data2[$c2+18],$data2[$c2+19],$data2[$c2+20],$data2[$c2+21],$data2[$c2+22]));
      } 
       $i++;
	}
    fclose($handle2);
}
if(file_exists ('dossierCSV_EXCEL/rhformation.csv')){
  $nom1="./dossierCSV_EXCEL/rhformation.csv";
unlink($nom1);
}
?>
   <body>
 
  </body>
