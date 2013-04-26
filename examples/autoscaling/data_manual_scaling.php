<?php

require '../../lib/BarChart.php';
?>

<h2>No autoscaling (text encoding)</h2>
<?
$values1 = array(-10, 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110);
$values2 = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130);

$chart = new BarChart('bvg', 500, 200);
$chart->setDataFormat(Chart::TEXT);
$chart->setAutoscale(false);

$data1 = new ChartData($values1);
$data1->setAutoscale(false);
$chart->addData($data1);

$data2 = new ChartData($values2);
$data2->setColor('336699');
$data2->setAutoscale(false);
$chart->addData($data2);

$y_axis = new ChartAxis('y');
$chart->addAxis($y_axis);

echo $chart->toHtml();
var_dump($chart->getQuery());
?>

<h2>No autoscaling (simple encoding)</h2>
<?
$chart->setDataFormat(Chart::SIMPLE_ENCODING);
echo $chart->toHtml();
var_dump($chart->getQuery());
?>

<h2>No autoscaling (extended encoding)</h2>
<?
$chart->setDataFormat(Chart::EXTENDED_ENCODING);
echo $chart->toHtml();
var_dump($chart->getQuery());
?>

<h2>Per-data Manual scaling with different scales (text encoding)</h2>
<?
$chart->setDataFormat(Chart::TEXT);
$data1->setScale(-10,110);
$data2->setScale(0,130);

echo $chart->toHtml();
var_dump($chart->getQuery());
?>

<h2>Per-data Manual scaling with different scales (simple encoding)</h2>
<?
$chart->setDataFormat(Chart::SIMPLE_ENCODING);

echo $chart->toHtml();
var_dump($chart->getQuery());
?>

<h2>Per-data Manual scaling with different scales (extended encoding)</h2>
<?
$chart->setDataFormat(Chart::EXTENDED_ENCODING);

echo $chart->toHtml();
var_dump($chart->getQuery());
?>
