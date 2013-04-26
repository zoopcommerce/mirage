<?php

require '../../lib/BarChart.php';
?>

<h2>Data autoscaling (text format)</h2>
<?
$values1 = array(-10, 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110);
$values2 = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130);

$chart = new BarChart('bvg', 500, 200);
$chart->setDataFormat(Chart::TEXT);
$chart->setAutoscale(Chart::AUTOSCALE_OFF);

$data = new ChartData($values1);
$data->setAutoscale(true);
$chart->addData($data);

$data = new ChartData($values2);
$data->setColor('336699');
$data->setAutoscale(true);
$chart->addData($data);

$y_axis = new ChartAxis('y');
$chart->addAxis($y_axis);

echo $chart->toHtml();
var_dump($chart->getQuery());
?>

<h2>Data autoscaling (simple encoding)</h2>
<?
$chart->setDataFormat(Chart::SIMPLE_ENCODING);

echo $chart->toHtml();
var_dump($chart->getQuery());
?>

<h2>Data autoscaling (extended encoding)</h2>
<?
$chart->setDataFormat(Chart::EXTENDED_ENCODING);

echo $chart->toHtml();
var_dump($chart->getQuery());
?>
