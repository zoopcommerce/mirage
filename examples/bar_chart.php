<?php

require '../lib/Chart.php';

$values = array();
for ($i = 0; $i <= 10; $i += 1) {
	$values[] = rand(10,100);
}

$chart = new Chart('bvs', 500, 200);
$chart->addData(new ChartData($values));

$y_axis = new ChartAxis('y');
$chart->addAxis($y_axis);

header('Content-Type: image/png');
echo $chart;
