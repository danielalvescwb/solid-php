<?php

namespace src\polygons;

class Square
{
    protected $name = 'Square';
    protected $side;

    public function getNamePolygon(): string
    {
       return $this->name;
    }

    public function setSide(float $side): void
    {
        $this->side = $side;
    }

    public function getSide(): float
    {
        return $this->side;
    }

    public function getArea(): float
    {
        return pow($this->getSide(),2);
    }
}