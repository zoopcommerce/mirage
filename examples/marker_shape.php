<?php

require '../lib/Chart.php';
require '../lib/markers/ChartShapeMarker.php';

$values = array();
for ($i = 0; $i <= 10; $i += 1) {
	$values[] = rand(20,80);
}

$chart = new Chart('lc', 500, 200);
$chart->setScale(0,100);
$data = new ChartData($values);
$chart->addData($data);

$marker = new ChartShapeMarker(ChartShapeMarker::CIRCLE);
$marker->setData($data);
$chart->addMarker($marker);

$marker = new ChartShapeMarker(ChartShapeMarker::ARROW);
$marker->setData($data);
$marker->setColor('ff0000');
$marker->setPoint(2);
$chart->addMarker($marker);

header('Content-Type: image/png');
echo $chart;
