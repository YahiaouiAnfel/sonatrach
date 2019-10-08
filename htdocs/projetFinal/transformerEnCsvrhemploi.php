<?php
$bdname = "sonatrach";
$user = "root";
$pass = "";$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass);
?>

<?php
$date = new DateTime();
if (($handle2 = fopen("dossierCSV_EXCEL/rhemploi.csv", "r")) !== FALSE) { 
  $sql="";
  $c2=0;
  $i=0;
   while(!(feof($handle2))){ 
    $data2 = fgetcsv($handle2,","); 
    $requete1= $bdd->prepare("SELECT * FROM rh_emploi");
        $requete1->execute(array());
        $row = $requete1->fetchAll(PDO::FETCH_ASSOC);
         $existe= $requete1->rowCount();
         $l=0;$trouve=0;

        while (($l<$existe)&&($trouve===0)){
            if(($data2[$c2+3]===$row[$l]["code_act"])&&($data2[$c2+2]===$row[$l]["code_fct"])&&($data2[$c2]===$row[$l]["historique"])){
              $trouve=1;
              break;
            }
            else{
              $l++;
            }
        }
    
    if($trouve===1){
$requete1= $bdd->prepare("UPDATE rh_emploi SET date=?, N=?,nom_prenom=?,sexe=?,qualification=?,poste=?,csp=?,csp2=?,fonction=?, W_RESIDENCE=?,W_AFFECTATION=?,region=?,mode_recrutement=?,motif_recrutement=?,observation=? WHERE  code_act=? AND code_fct=? AND historique= ?");
        $requete1->execute(array($date->format('Y-m-d'),$data2[$c2+1],$data2[$c2+4],$data2[$c2+5],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+9],$data2[$c2+10],$data2[$c2+11],$data2[$c2+12],$data2[$c2+13],$data2[$c2+14],$data2[$c2+15],$data2[$c2+16],$data2[$c2+3],$data2[$c2+2],$data2[$c2]));

    }
   else{
    if($data2[$c2+4]==""){break;}
    
    $requete2= $bdd->prepare("INSERT INTO rh_emploi (date,historique,N,code_fct,code_act,nom_prenom,sexe,qualification,poste,csp,csp2,fonction, W_RESIDENCE,W_AFFECTATION,region,mode_recrutement,motif_recrutement,observation) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $requete2->execute(array($date->format('Y-m-d'),$data2[$c2],$data2[$c2+1],$data2[$c2+2],$data2[$c2+3],$data2[$c2+4],$data2[$c2+5],$data2[$c2+6],$data2[$c2+7],$data2[$c2+8],$data2[$c2+9],$data2[$c2+10],$data2[$c2+11],$data2[$c2+12],$data2[$c2+13],$data2[$c2+14],$data2[$c2+15],$data2[$c2+16]));
       } $i++;
  }
    fclose($handle2);
}
if(file_exists ('dossierCSV_EXCEL/rhemploi.csv')){
  $nom1="./dossierCSV_EXCEL/rhemploi.csv";
unlink($nom1);
}
?>
   <body>
 
  </body>
