<?php
$bdname = "sonatrach";
$user = "root";
$pass = "";
session_start();
$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass);
require_once ('.\src\jpgraph.php');
require_once ('.\src\jpgraph_pie.php');
require_once ('.\src\jpgraph_pie3d.php');
$date = new DateTime();
$i=0;
 $requete= $bdd->prepare("SELECT * FROM npt_dev WHERE date LIKE ?");
                          $requete->execute(array('%'.$date->format('Y-m').'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                      
// Some data
$data = array($row[$i]["Problemes_Puits"],$row[$i]["NPT_Sonatrach"],$row[$i]["NPT_Entrepreneur"],$row[$i]["NPT_Societes_de_Services"],$row[$i]["Attentes_Escortes"]);
$tab = array("Problemes_Puits","NPT_Sonatrach","NPT_Entrepreneur","NPT_Societes_de_Services","Attentes_Escortes");

// Create the Pie Graph. 
$graph = new PieGraph(570,570);

$theme_class= new VividTheme;
$graph->SetTheme($theme_class);

// Set A title for the plot
//$graph->title->Set("A Simple 3D Pie Plot");

// Create
$p1 = new PiePlot3D($data);
$graph->Add($p1);
$p1->SetLegends($tab);

$p1->ShowBorder();
$p1->SetColor('black');
$p1->ExplodeSlice(1);
$graph->Stroke();

?>