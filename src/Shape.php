<?php


namespace App;


class Shape
{
    const SHAPE_TYPE = 1;

    public string $name;
    protected float $width;
    protected float $length;
    private string $id;

    /**
     * Shape constructor.
     * @param float $width
     * @param float $length
     */
    public function __construct(float $width, float $length)
    {
        $this->width = $width;
        $this->length = $length;
        $this->id = unique_id();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public static function shapeType()
    {
        return self::SHAPE_TYPE;
    }

    public function getArea(): float
    {
        return $this->width * $this->length;
    }

    public function getObject(): object
    {
        return (object) clone $this;
    }
}