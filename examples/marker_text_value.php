<?php

require '../lib/Chart.php';
require '../lib/markers/ChartTextMarker.php';

$values = array();
for ($i = 0; $i <= 10; $i += 1) {
	$values[] = rand(20,80);
}

$chart = new Chart('bvs', 500, 200);
$chart->setScale(0,100);
$data = new ChartData($values);
$chart->addData($data);

$marker = new ChartTextMarker();
$marker->setData($data);
$chart->addMarker($marker);

header('Content-Type: image/png');
echo $chart;

