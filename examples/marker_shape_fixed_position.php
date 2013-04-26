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

// a fixed position marker
$marker = new ChartShapeMarker(ChartShapeMarker::DIAMOND);
$marker->setColor('ff0000');
$marker->setFixedPosition(0.5,0.5);
$chart->addMarker($marker);

header('Content-Type: image/png');
echo $chart;

