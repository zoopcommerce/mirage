<?php

require '../lib/Chart.php';
require '../lib/markers/ChartLineMarker.php';
require '../lib/markers/ChartShapeMarker.php';

$values = array(array(),array(), array());
for ($i = 0; $i <= 10; $i += 1) {
	$v = rand(20,80);
	$values[0][] = $v;
	$values[1][] = rand(0,20);
	$values[2][] = $v + rand(-10,10);
}

$chart = new Chart('bvs', 500, 200);
$chart->setScale(0,100);
$data0 = new ChartData($values[0]);
$chart->addData($data0);

$data1 = new ChartData($values[1]);
$data1->setColor(array('FFC6A5','FFFF42','DEF3BD','00A5C6','DEBDDE'));
$chart->addData($data1);

$marker = new ChartLineMarker();
$marker->setData($data0);
$marker->setSize(5);
$marker->setPoints(5);
$chart->addMarker($marker);

$marker = new ChartLineMarker();
$marker->setData($data0);
$marker->setColor('6699cc');
$marker->setSize(5);
$marker->setPoints(0,5);
$marker->setZOrder(-0.5);
$chart->addMarker($marker);

$data2 = new ChartData($values[2]);
$marker = new ChartShapeMarker('a');
$marker->setColor('ff0000');
$marker->setData($data2);
$chart->addMarker($marker);

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
