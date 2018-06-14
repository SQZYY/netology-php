<?php

class Car
{
    public $trademark = 'Audi ';
    public $behavior;
    public $speed;
    public $color = 'Red ';

    public function __construct()
    {
        $this->speed = rand(0, 10);
        if ($this->speed >= 1) {
            $this->behavior = 'Набирает скорость ';
        } else {
            $this->behavior = 'Стоит на месте ';
        }
    }
}

$firstCar = new Car();
$secondCar = new Car();

echo $firstCar->color;
echo $firstCar->trademark;
echo $firstCar->behavior;
echo $firstCar->speed . '<br>';
echo $secondCar->color = 'White ';
echo $secondCar->trademark = 'Mercedes ';
echo $secondCar->behavior;
echo $secondCar->speed . '<br>';

class Tv
{
    public $trademark = 'Sony ';
    public $price;
    public $addons;

    public function __construct()
    {
        $this->price = rand(20000, 40000);
        if ($this->price >= 30000) {
            $this->addons = 'SmartTV ';
        } else {
            $this->addons = 'LED ';
        }
    }
}

$firstTv = new Tv();
$secondTv = new Tv();

echo $firstTv->trademark;
echo $firstTv->addons;
echo $firstTv->price . '<br>';
echo $secondTv->trademark = 'Samsung ';
echo $secondTv->addons;
echo $secondTv->price . '<br>';

class BallPointPen
{
    public $trademark;
    public $color;
    public $price;

    public function __construct()
    {
        $this->price = rand(1000, 4000);
        if ($this->price >= 2500) {
            $this->trademark = 'Parker ';
            $this->color = 'Blue ';
        } else {
            $this->trademark = 'Waterman ';
            $this->color = 'Black ';
        }
    }
}

$firstPen = new BallPointPen();
$secondPen = new BallPointPen();

echo $firstPen->color;
echo $firstPen->trademark;
echo $firstPen->price . '<br>';
echo $secondPen->color;
echo $secondPen->trademark;
echo $secondPen->price . '<br>';

class Duck
{
    public $price;
    public $type;
    public $color;

    public function __construct()
    {
        $this->price = rand(100, 1000);
        if ($this->price >= 300) {
            $this->color = 'Yellow ';
            $this->type = 'Plush Duck ';
        } else {
            $this->color = 'Yellow ';
            $this->type = 'Plastic Duck ';
        }
    }
}

$firstDuck = new Duck();
$secondDuck = new Duck();

echo $firstDuck->color;
echo $firstDuck->type;
echo $firstDuck->price . '<br>';
echo $secondDuck->color;
echo $secondDuck->type;
echo $secondDuck->price . '<br>';

class Product
{
    public $price;
    public $discount;

    public function __construct()
    {
        $this->price = rand(20000, 40000);
        if ($this->price >= 30000) {
            $this->discount = ' 15%';
        } else {
            $this->discount = ' 10%';
        }
    }
}

$firstProduct = new Product();
$secondProduct = new Product();

echo $firstProduct->price;
echo $firstProduct->discount . '<br>';
echo $secondProduct->price;
echo $secondProduct->discount;