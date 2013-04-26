<?php

require '../lib/Chart.php';
require '../lib/markers/ChartTextMarker.php';
require '../lib/markers/ChartShapeMarker.php';

$values = array();
for ($i = 0; $i <= 10; $i += 1) {
	$values[] = rand(20,80);
}

$chart = new Chart('bvs', 500, 200);
$chart->setScale(0,100);
$data = new ChartData($values);
$chart->addData($data);

$marker = new ChartTextMarker(ChartTextMarker::FLAG, 'Hello, world!');
$marker->setData($data);
$marker->setStep(2);
$chart->addMarker($marker);

// a fixed position marker
$marker = new ChartTextMarker(ChartTextMarker::TEXT, 'Here');
$marker->setFixedPosition(0.25,1);
$chart->addMarker($marker);

header('Content-Type: image/png');
echo $chart;

