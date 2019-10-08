<?php // content="text/plain; charset=utf-8"
$bdname = "sonatrach";
$user = "root";
$pass = "";
session_start();
$bdd = new PDO('mysql:host=localhost;dbname='.$bdname, $user, $pass); // content="text/plain; charset=utf-8"
require_once ('.\src\jpgraph.php');
require_once ('.\src\jpgraph_line.php');
$date = new DateTime();
 $requete= $bdd->prepare("SELECT * FROM plf_dev_sud WHERE date LIKE ?");
                          $requete->execute(array('%'.$date->format('Y-m').'%'));
                          $existe= $requete->rowCount();
                          $row = $requete->fetchAll(PDO::FETCH_ASSOC);
                          
$datay1 = array($row[0]["puitsAlivrer1"],$row[1]["puitsAlivrer1"],$row[2]["puitsAlivrer1"],$row[3]["puitsAlivrer1"],$row[4]["puitsAlivrer1"],$row[5]["puitsAlivrer1"],$row[6]["puitsAlivrer1"],$row[7]["puitsAlivrer1"],$row[8]["puitsAlivrer1"],$row[9]["puitsAlivrer1"],$row[10]["puitsAlivrer1"],$row[11]["puitsAlivrer1"]);
$datay2 = array($row[0]["puitslivrer1"],$row[1]["puitslivrer1"],$row[2]["puitslivrer1"],$row[3]["puitslivrer1"],$row[4]["puitslivrer1"],$row[5]["puitslivrer1"],$row[6]["puitslivrer1"],$row[7]["puitslivrer1"],$row[8]["puitslivrer1"],$row[9]["puitslivrer1"],$row[10]["puitslivrer1"],$row[11]["puitslivrer1"]);


// Setup the graph
$graph = new Graph(400,400);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
//$graph->title->Set('Filled Y-grid');
$graph->SetBox(false);

//$graph->SetMargin(40,20,36,63);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels(array('1','2','3','4','5','6','7','8','9','10','11','12'));
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Prévision');
//Create the second line
$p2 = new LinePlot($datay2);
$graph->Add($p2);
$p2->SetColor("#B22222");
$p2->SetLegend('Achevé');
$p1->mark->SetType(MARK_FILLEDCIRCLE);
$p2->mark->SetType(MARK_FILLEDCIRCLE);
$p2->mark->SetFillColor("red");
$p1->mark->SetWidth(3);


$graph->legend->SetFrameWeight(1);


$graph->legend->SetFrameWeight(10);
$graph->xaxis->title->Set("Mois");
$graph->yaxis->title->Set("Puits");
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->legend-> SetPos (0.5,0.98, 'center', 'bottom');

// Output line
$graph->Stroke();

?>
