<?php
$bdname = "sonatrach";
$user = "root";
$pass = "";$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass);
?>

<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/juridique.csv", "r")) !== FALSE) { 
	$sql="";
	$c2=0;
	$i=0;
	 while(!(feof($handle2))){ 
	 	$data2 = fgetcsv($handle2,",");	
	 	$requete1= $bdd->prepare("SELECT * FROM juridique");
        $requete1->execute(array());
        $row = $requete1->fetchAll(PDO::FETCH_ASSOC);
         $existe= $requete1->rowCount();
         $l=0;$trouve=0;

        while (($l<$existe)&&($trouve===0)){
        		if(($data2[$c2+4]===$row[$l]["num_Contrat_Avenant_Commande"])&&($data2[$c2+5]===$row[$l]["numero_de_contrat_de_base"])&&($data2[$c2]===$row[$l]["historique"])){
        			$trouve=1;
              break;
        		}
        		else{
        			$l++;
        		}
        }
    
	 	if($trouve===1){
$requete1= $bdd->prepare("UPDATE juridique SET date=?,structure =?,structure_contractante_division=?,type=?,objet_contrat_avenant_commande=?,fournisseur=?,pays_origine=?,capital_social=?,montant_ht_da=?,montant_ht_euro=?,montant_ht_dollars=?,montant_ht_yen=?,montant_ht_jonayh=?,montant_ht_taux_de_change=?,date_signature_contrat_avenant_commande=?,duree_contrat_avenant_commande=?,mode_de_passation=?,motif_de_gre_a_gre_simple=?,type_contrat_avenant_commande=?,visa_commission_date_visa=?,visa_commission_numero_visa=?,visa_commission_commission=?,passe_ouverte_refus_visa_commission_date_signature=?,passe_ouverte_refus_visa_commission_numero_visa_refuse=? WHERE  numero_de_contrat_de_base=? AND num_Contrat_Avenant_Commande=? AND historique= ?");
        $requete1->execute(array($date->format('Y-m-d'),$data2[$c2+1],$data2[$c2+2],$data2[$c2+3],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+9],$data2[$c2+10],$data2[$c2+11],$data2[$c2+12],$data2[$c2+13],$data2[$c2+14],$data2[$c2+15],$data2[$c2+16],$data2[$c2+17],$data2[$c2+18],$data2[$c2+19],$data2[$c2+20],$data2[$c2+21],$data2[$c2+22],$data2[$c2+23],$data2[$c2+24],$data2[$c2+25],$data2[$c2+5],$data2[$c2+4],$data2[$c2]));

	 	}
	 else{
    if($data2[$c2+5]==""){break;}

	 	
	 	$requete2= $bdd->prepare("INSERT INTO juridique (date,historique,structure,structure_contractante_division,type,num_Contrat_Avenant_Commande,numero_de_contrat_de_base,objet_contrat_avenant_commande,fournisseur,pays_origine,capital_social,montant_ht_da,montant_ht_euro,montant_ht_dollars,montant_ht_yen,montant_ht_jonayh,montant_ht_taux_de_change,date_signature_contrat_avenant_commande,duree_contrat_avenant_commande,mode_de_passation,motif_de_gre_a_gre_simple,type_contrat_avenant_commande,visa_commission_date_visa,visa_commission_numero_visa,visa_commission_commission,passe_ouverte_refus_visa_commission_date_signature,passe_ouverte_refus_visa_commission_numero_visa_refuse) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2],$data2[$c2+1],$data2[$c2+2],$data2[$c2+3],$data2[$c2+4],$data2[$c2+5],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+9],$data2[$c2+10],$data2[$c2+11],$data2[$c2+12],$data2[$c2+13],$data2[$c2+14],$data2[$c2+15],$data2[$c2+16],$data2[$c2+17],$data2[$c2+18],$data2[$c2+19],$data2[$c2+20],$data2[$c2+21],$data2[$c2+22],$data2[$c2+23],$data2[$c2+24],$data2[$c2+25]));
       } $i++;
	}
    fclose($handle2);
}
if(file_exists ('dossierCSV_EXCEL/juridique.csv')){
  $nom1="./dossierCSV_EXCEL/juridique.csv";
unlink($nom1);
}
?>
   <body>
 
  </body>
