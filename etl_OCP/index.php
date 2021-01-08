<?php

require __DIR__."/vendor/autoload.php";

use src\Read;

$readCSV = new Read();
$readCSV->setPath(__DIR__."/src/data");
$readCSV->setFile("data.csv");
$arrCSV = $readCSV->readFile();
echo "<pre>CSV";
print_r($readCSV->readFile());
echo "</pre>";

$readTXT = new Read();
$readTXT->setPath(__DIR__."/src/data");
$readTXT->setFile("data.txt");
$arrTXT = $readTXT->readFile();
echo "<pre>TXT";
print_r($readTXT->readFile());
echo "</pre>";

$merge = array_merge(["arrCSV"=>$arrCSV],["arrTXT"=> $arrTXT]);

echo "<pre>Merge";
print_r($merge);
echo "</pre>";