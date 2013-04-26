<?php

require '../lib/PieChart.php';

$values = array('Success' => 20, 'Failure' => 75, 'Unknow' => 5);

//~ $chart = new PieChart('pc', 500, 200);

//~ $data = new ChartData($values);
//~ $data->setLabelsAuto();
//~ $data->setLegend('Foo');
//~ $chart->addData($data);

//~ $data = new ChartData(array(50,50));
//~ $data->setLabels(array('Foo','Bar'));
//~ $data->setLegend('Foo');
//~ $chart->addData($data);

$chart = new PieChart('pc', 500, 200);
$chart->addData(new ChartData(array(10,20,30)));

$data = new ChartData(array(50,50));
$chart->addData($data);
		
$chart->setQueryMethod(ChartApi::GET);
$data->setLabels(array('Foo','Bar'));

if ( isset($_GET['debug']) ) {
	var_dump($chart->getQuery());
	echo $chart->validate();
	echo $chart->toHtml();
}
else {
	header('Content-Type: image/png');
	echo $chart;
}

