<?php

// accieving plolymorphism by php
abstract class Shape
{
    public const t = 't';
    public function defaultFunction()
    {
        return 'dasdad';
    }
    abstract public function calculateArea();
}

class Rectangle extends Shape
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->length * $this->width;
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius .' ' . $this->defaultFunction();
    }
}

// Polymorphic behavior
$rectangle = new Rectangle(5, 4);
$circle = new Circle(3);

$shapes = [$rectangle, $circle];

foreach ($shapes as $shape) {
    echo "Area: " . $shape->calculateArea() . PHP_EOL;
}
