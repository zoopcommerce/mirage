<?php

require '../lib/Chart.php';
require '../lib/icons/ChartIconNote.php';

$values = array();
for ($i = 0; $i <= 10; $i += 1) {
	$values[] = rand(20,80);
}

$chart = new Chart('ls', 500, 200);
$data = new ChartData($values);
$chart->addData($data);

$marker = new ChartIconNote('Hello');
$marker->setData($data);
//~ $marker->setSize(5);
//~ $marker->setPoints(5);
$chart->addDynamicMarker($marker);

$y_axis = new ChartAxis('y');
$chart->addAxis($y_axis);

if ( isset($_GET['debug']) ) {
	var_dump($chart->getQuery());
	echo $chart->validate();
	echo $chart->toHtml();
}
else{
	header('Content-Type: image/png');
	echo $chart;
}
