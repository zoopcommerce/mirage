<?php

require '../lib/Chart.php';

$chart = new Chart('lc', 500, 200);
$chart->setScale(0,100);

$line = new ChartData(array(10,12,15,20,22,50,60,63,58,75,67,80));
$chart->addData($line);

$y_axis = new ChartAxis('y');
$chart->addAxis($y_axis);

$x_axis = new ChartAxis('x');
$chart->addAxis($x_axis);

if ( isset($_GET['debug']) ) {
	var_dump($chart->getQuery());
	echo $chart->validate();
	echo $chart->toHtml();
}
else{
	header('Content-Type: image/png');
	echo $chart;
}
