<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="multiline.css">
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/2D1209FB-415D-344A-9E2E-1AECA31356D5/main.js" charset="UTF-8"></script><script src="http://d3js.org/d3.v3.js" charset="utf-8"></script>
    <!--<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>-->
</head>
<body>
<?php  
include "CsvGraphePlf.php";
?>

<div class="chart-wrapper" id="chart-line1"></div>

<script type="text/javascript">
    d3.csv('dossierCSV_EXCEL/graphePlfExpNord.csv', function(error, data) {
    data.forEach(function (d) {
        d.mois = +d.mois;
        d.prevision = +d.prevision;
        d.fait = +d.fait;
        
    });

    var chart = makeLineChart(data, 'mois', {
        'Prévision': {column: 'prevision'},
        'Achevé': {column: 'fait'}
    }, {xAxis: 'Mois', yAxis: 'Puits'});
    chart.bind("#chart-line1");
    chart.render();

});
</script>

<script src="multiline.js" charset="utf-8"></script>
</body>
</html>