<?php

require __DIR__."/vendor/autoload.php";

use src\Polygon;
use src\polygons\Rectangle;
use src\polygons\Square;

$polygon = new Polygon();
$polygon->setForm(new Rectangle());
$polygon->getForm()->setWidth(5);
$polygon->getForm()->setHeight(10);

echo "<pre>";
print_r($polygon);
echo "</pre>";

echo "<h3>A área do Polígono "
    .$polygon->getForm()->getNamePolygon()
    ." com altura de "
    .$polygon->getForm()->getHeight()
    ." e largura de "
    .$polygon->getForm()->getWidth()
    ." é de ".$polygon->getForm()->getArea()."</h3>";

echo "<hr>";

$polygon = new Polygon();
$polygon->setForm(new Square());
$polygon->getForm()->setSide(5);

echo "<pre>";
print_r($polygon);
echo "</pre>";

echo "<h3>A área do Polígono "
    .$polygon->getForm()->getNamePolygon()
    ." com lado de "
    .$polygon->getForm()->getSide()
    ." é de ".$polygon->getForm()->getArea()."</h3>";
