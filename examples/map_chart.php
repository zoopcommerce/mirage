<?php

require '../lib/MapChart.php';

$chart = new MapChart(440,220);
$chart->addData(new ChartData(array(
	'FR' => 20,
	'FI' => 30,
	'GB' => 50,
	'DE' => 70,
	'US' => 100
)));
$chart->setColors('ffffff', array('ffffff','FF0000'));
$chart->setFill('EAF7FE');

if ( isset($_GET['debug']) ) {
	var_dump($chart->getQuery());
	echo $chart->validate();
	echo $chart->toHtml();
}
else{
	header('Content-Type: image/png');
	echo $chart;
}
