<?php


namespace App;

use stdClass;

class Circle extends Shape
{
    const SHAPE_TYPE = 3;

    protected float $radius;

    public function __construct(float $width, float $length, $radius)
    {
        parent::__construct($width, $length);
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return M_PI * ($this->radius ** 2);
    }

    public function getObject(): object
    {
        $object = new stdClass();
        $object->name = $this->getName();
        $object->radius = $this->getRadius();
        $object->id = $this->getId();

        return $object;
    }
}