<?php

require '../lib/Chart.php';
require '../lib/markers/ChartLineMarker.php';

$values = array();
for ($i = 0; $i <= 10; $i += 1) {
	$values[] = rand(0,100);
}

$chart = new Chart('bvs', 500, 200);
$data = new ChartData($values);
$chart->addData($data);

$marker = new ChartLineMarker();
$marker->setData($data);
$chart->addMarker($marker);

header('Content-Type: image/png');
echo $chart;
