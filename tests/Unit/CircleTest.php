<?php


namespace App\Unit\Tests;


use App\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    private Circle $circle;

    protected function setUp(): void
    {
        parent::setUp();

        $this->circle = new Circle(10, 10, 10);
        $this->circle->setName('my_circle');
    }

    public function test_if_area_is_correct()
    {
        self::assertEquals($this->circle->getArea(), M_PI * 100);
    }

    public function test_if_object_has_properties()
    {

        foreach (['name', 'radius', 'id'] as $property) {
            self::assertObjectHasAttribute($property, $this->circle->getObject());
        }
    }


}