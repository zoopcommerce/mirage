<?php

require '../lib/QRCode.php';

$chart = new QRCode(150, 150);

$chart->setData('Hello world');
//~ $chart->setOutputEncoding('UTF-8');
//~ header('Content-Type: image/png');
echo $chart->toHtml();
