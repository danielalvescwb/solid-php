<?php

namespace src\polygons;

class Rectangle
{
    protected $name = 'Rectangle';
    protected $width;
    protected $height;

    public function getNamePolygon(): string
    {
       return $this->name;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getArea(): float
    {
        return $this->getHeight() * $this->getWidth();
    }
}