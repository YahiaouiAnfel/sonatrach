<?php
$bdname = "sonatrach";
$user = "root";
$pass = "";$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass);
?>

<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/passation-marche.csv", "r")) !== FALSE) { 
	$sql="";
	$c2=0;
	$i=0;
	 while(!(feof($handle2))){ 
	 	$data2 = fgetcsv($handle2,",");	
	 	$requete1= $bdd->prepare("SELECT * FROM passation_des_marches");
        $requete1->execute(array());
        $row = $requete1->fetchAll(PDO::FETCH_ASSOC);
         $existe= $requete1->rowCount();
         $l=0;$trouve=0;

        while (($l<$existe)&&($trouve===0)){
        		if(($data2[$c2+3]===$row[$l]["numero_appel_offre"])&&($data2[$c2+34]===$row[$l]["contrat_num"])&&($data2[$c2]===$row[$l]["historique"])){
        			$trouve=1;
              break;
        		}
        		else{
        			$l++;
        		}
        }
  
	 	if($trouve===1){
$requete1= $bdd->prepare("UPDATE passation_des_marches SET date=?,intitule_description_des_marches =?,situation_des_marches=?,cout_estimatif_da=?,taut_de_change=?,mode_de_passation=?,nombre_de_lots=?,dao_debut_elaboration=?,dao_fin_elaboration=?,cmcompetantelancement_cme_depot_de_dao=?,cmcompetantelancement_cme_num_visa=?,cmcompetantelancement_cma_depot_dao=?,cmcompetantelancement_cma_num_visa=?,cmcompetantelancement_cmd_depot_dao=?,cmcompetantelancement_cmd_num_visa=?,date_pub_num_baosem=?,date_cloture_depot_offre=?,nombre_plis_recus=?,ouverture_public_offre=?,rapport_evaluation_demarrage=?,rapport_evaluation_cloture_evaluation=?,rapport_evaluation_emission_rapport=?,ouverture_offre_financiere=? ,attribution_des_lots=?, publication_resultat_attribution_provisoire_au_baosem=?, recours=? ,cmattributiondefinitive_cme_depot_dossier=? ,cmattributiondefinitive__cme_numero_visa=?, cmattributiondefinitive_cma_depot_dossier=?, cmattributiondefinitive_cma_numeor_visa=?, cmattributiondefinitive_cmd_depot_dossier=?, cmattributiondefinitive_cmd_numero_visa=?  ,contrat_date_signature=? ,contrat_duree=? ,observation_annulation=? ,observation_infructuosite=? WHERE  numero_appel_offre=? AND contrat_num=? AND historique= ?");
        $requete1->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+4],$data2[$c2+5],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+9],$data2[$c2+10],$data2[$c2+11],$data2[$c2+12],$data2[$c2+13],$data2[$c2+14],$data2[$c2+15],$data2[$c2+16],$data2[$c2+17],$data2[$c2+18],$data2[$c2+19],$data2[$c2+20],$data2[$c2+21],$data2[$c2+22],$data2[$c2+23],$data2[$c2+24],$data2[$c2+25],$data2[$c2+26],$data2[$c2+27],$data2[$c2+28],$data2[$c2+29],$data2[$c2+30],$data2[$c2+31],$data2[$c2+32],$data2[$c2+33],$data2[$c2+35],$data2[$c2+36],$data2[$c2+37],$data2[$c2+38],$data2[$c2+3],$data2[$c2+34],$data2[$c2]));

	 	}
	 else{
    if($data2[$c2+3]==""){break;}
	 	
	 	$requete2= $bdd->prepare("INSERT INTO passation_des_marches (date,intitule_description_des_marches,numero_appel_offre,situation_des_marches,cout_estimatif_da,taut_de_change,mode_de_passation,nombre_de_lots,dao_debut_elaboration,dao_fin_elaboration,cmcompetantelancement_cme_depot_de_dao,cmcompetantelancement_cme_num_visa,cmcompetantelancement_cma_depot_dao,cmcompetantelancement_cma_num_visa,cmcompetantelancement_cmd_depot_dao,cmcompetantelancement_cmd_num_visa,date_pub_num_baosem,date_cloture_depot_offre,nombre_plis_recus,ouverture_public_offre,rapport_evaluation_demarrage,rapport_evaluation_cloture_evaluation,rapport_evaluation_emission_rapport,ouverture_offre_financiere,attribution_des_lots,publication_resultat_attribution_provisoire_au_baosem,recours,cmattributiondefinitive_cme_depot_dossier,cmattributiondefinitive__cme_numero_visa,cmattributiondefinitive_cma_depot_dossier,cmattributiondefinitive_cma_numeor_visa,cmattributiondefinitive_cmd_depot_dossier,cmattributiondefinitive_cmd_numero_visa,contrat_num,contrat_date_signature,contrat_duree,observation_annulation,observation_infructuosite,historique) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2+2],$data2[$c2+3],$data2[$c2+4],$data2[$c2+5],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+9],$data2[$c2+10],$data2[$c2+11],$data2[$c2+12],$data2[$c2+13],$data2[$c2+14],$data2[$c2+15],$data2[$c2+16],$data2[$c2+17],$data2[$c2+18],$data2[$c2+19],$data2[$c2+20],$data2[$c2+21],$data2[$c2+22],$data2[$c2+23],$data2[$c2+24],$data2[$c2+25],$data2[$c2+26],$data2[$c2+27],$data2[$c2+28],$data2[$c2+29],$data2[$c2+30],$data2[$c2+31],$data2[$c2+32],$data2[$c2+33],$data2[$c2+34],$data2[$c2+35],$data2[$c2+36],$data2[$c2+37],$data2[$c2+38],$data2[$c2]));
       } 
       $i++;
	}
    fclose($handle2);
}
if(file_exists ('dossierCSV_EXCEL/passation-marche.csv')){
  $nom1="./dossierCSV_EXCEL/passation-marche.csv";
unlink($nom1);
}
?>
   <body>
 
  </body>
