<!DOCTYPE html>
<meta charset="utf-8">
<?php
include "CsvGrapheNpt.php";
?>

<style>

.arc text {
  font: 10px sans-serif;
  text-anchor: end;
}

.arc path {
  stroke: #fff;
}

</style>
<svg width="960" height="500"></svg>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/2D1209FB-415D-344A-9E2E-1AECA31356D5/main.js" charset="UTF-8"></script><script src="https://d3js.org/d3.v4.min.js"></script>
<script >

var svg = d3.select("svg"),
    width = +svg.attr("width"),
    height = +svg.attr("height"),
    radius = Math.min(width, height) / 2,
    g = svg.append("g").attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

var color = d3.scaleOrdinal(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c"]);

var pie = d3.pie()
    .sort(null)
    .value(function(d) { return d.valeur; });

var path = d3.arc()
    .outerRadius(radius - 10)
    .innerRadius(0);

var label = d3.arc()
    .outerRadius(radius - 40)
    .innerRadius(radius - 40);

d3.csv("dossierCSV_EXCEL/grapheNptExp.csv", function(d) {
 d.valeur= +d.valeur;
  return d;
}, function(error, data) {
  if (error) throw error;

  var arc = g.selectAll(".arc")
    .data(pie(data))
    .enter().append("g")
      .attr("class", "arc");

  arc.append("path")
      .attr("d", path)
      .attr("fill", function(d) { return color(d.data.x); });

  arc.append("text")
      .attr("transform", function(d) { return "translate(" + label.centroid(d) + ")"; })
      .attr("dy", "0.35em")
      .text(function(d) { return d.data.x; });
       arc.append("text")
      

});

</script>
</div>
