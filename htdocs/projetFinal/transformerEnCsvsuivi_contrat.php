<?php
$bdname = "sonatrach";
$user = "root";
$pass = "";$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass);
?>

<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/contrat.csv", "r")) !== FALSE) { 
  $sql="";
  $c2=0;
  $i=0;
   while(!(feof($handle2))){ 
    $data2 = fgetcsv($handle2,","); 
    $requete1= $bdd->prepare("SELECT * FROM contrat");
        $requete1->execute(array());
        $row = $requete1->fetchAll(PDO::FETCH_ASSOC);
         $existe= $requete1->rowCount();
         $l=0;$trouve=0;

        while (($l<$existe)&&($trouve===0)){
            if(($data2[$c2+5]===$row[$l]["Num_contrat"])&&($data2[$c2+9]===$row[$l]["Date_signature"])&&($data2[$c2]===$row[$l]["historique"])){
              $trouve=1;
              break;
            }
            else{
              $l++;
            }
        }
    
    if($trouve===1){
$requete1= $bdd->prepare("UPDATE contrat SET date=?,Items =?,Objet_Contrat=?,Co_contractant=?,Duree=?,Mode_passation=?,Visa_commission=?,Montant_Contrat=?,Structure=?,Observations=? WHERE  Date_signature=? AND Num_contrat=? AND historique= ?");
        $requete1->execute(array($date->format('Y-m-d'),$data2[$c2+4],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+10],$data2[$c2+11],$data2[$c2+12],$data2[$c2+13],$data2[$c2+14],$data2[$c2+9],$data2[$c2+5],$data2[$c2]));

    }
   else{
    if($data2[$c2+5]==""){break;}
    
    $requete2= $bdd->prepare("INSERT INTO contrat (date,Items,Num_contrat,Objet_Contrat,Co_contractant,Duree,Date_signature,Mode_passation,Visa_commission,Montant_Contrat,Structure,Observations,historique) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2+4],$data2[$c2+5],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+9],$data2[$c2+10],$data2[$c2+11],$data2[$c2+12],$data2[$c2+13],$data2[$c2+14],$data2[$c2]));
      }
        $i++;
  }
    fclose($handle2);
}
if(file_exists ('dossierCSV_EXCEL/contrat.csv')){
  $nom1="./dossierCSV_EXCEL/contrat.csv";
unlink($nom1);
}
?>
  

   <body>
 
  </body>

