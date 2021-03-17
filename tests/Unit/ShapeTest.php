<?php


namespace App\Unit\Tests;


use App\Shape;
use PHPUnit\Framework\TestCase;

class ShapeTest extends TestCase
{
    private Shape $shape;

    protected function setUp(): void
    {
        parent::setUp();

        $this->shape = new Shape(10, 10);
        $this->shape->setName('my_shape');
    }


    public function test_is_calculating_area_properly()
    {
        self::assertEquals($this->shape->getArea(), 100);
    }

    public function test_if_object_has_properties()
    {
        foreach (['name', 'width', 'length', 'id'] as $property) {
            self::assertObjectHasAttribute($property, $this->shape->getObject());
        }
    }


}