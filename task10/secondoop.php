<?php

class Car
{
    public $trademark = 'BMW ';
    public $behavior;
    public $speed;
    public $color = 'White ';

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


echo $firstCar->color;
echo $firstCar->trademark;
echo $firstCar->behavior;
echo $firstCar->speed . '<br>';

class Mercedes extends Car
{
}

$secondCar = new Mercedes();

echo $secondCar->color = 'Red ';
echo $secondCar->trademark = 'Mercedes ';
echo $secondCar->behavior;
echo $secondCar->speed . '<br>';

class Tv
{
    public $trademark = 'LG ';
    public $price;
    public $addons;

    public function __construct()
    {
        $this->price = rand(10000, 40000);
        if ($this->price >= 25000) {
            $this->addons = 'SmartTV ';
        } else {
            $this->addons;
        }
    }
}

$firstTv = new Tv();

echo $firstTv->trademark;
echo $firstTv->addons;
echo $firstTv->price . '<br>';

class Samsung extends Tv
{
}

$secondTv = new Samsung();

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

echo $firstPen->color;
echo $firstPen->trademark;
echo $firstPen->price . '<br>';

class SecondPen extends BallPointPen
{
}

$secondPen = new SecondPen();

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

echo $firstDuck->color;
echo $firstDuck->type;
echo $firstDuck->price . '<br>';

class SecondDuck extends Duck
{
}

$secondDuck = new SecondDuck();

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

echo $firstProduct->price;
echo $firstProduct->discount . '<br>';

class SecondProduct extends Product
{
}

$secondProduct = new Product();

echo $secondProduct->price;
echo $secondProduct->discount;


interface CarTrademark
{
    public function carTrademark();
}

class CarFactory implements CarTrademark
{
    public $color = 'Black';
    public $trademark = 'Audi';
    public $price = 900000;
    public $discount = 10;
    public $speed = 200;

    public function carTrademark()
    {
        return 'Машина марки Audi';
    }
}

$carFactory = new CarFactory();

$carFactory->color;
$carFactory->trademark;
$carFactory->price;
$carFactory->discount;
$carFactory->speed;

class SportCar extends CarFactory
{
    public function carTrademark()
    {
        return 'Машина марки BMW';
    }
}

$sportCar = new SportCar();

$sportCar->color = 'Red';
$sportCar->trademark = 'BMW';
$sportCar->price = 15000000;
$sportCar->discount = 5;
$sportCar->speed = 220;


interface TvType
{
    public function tvType();
}

class Led implements TvType
{
    public $trademark = 'Sony';
    public $price = 60000;
    public $discount = 15;
    public $diagonal = 40;

    public function tvType()
    {
        return 'LED телевизор';
    }
}

$led = new Led();

$led->trademark;
$led->price;
$led->discount;
$led->diagonal;

class Pdp extends Led
{
    public function tvType()
    {
        return 'PDP телевизор';
    }
}

$pdp = new Pdp();

$pdp->trademark = 'LG';
$pdp->price = 10000;
$pdp->discount = 5;
$pdp->diagonal = 25;

interface Trademark
{
    public function company();
}

class PenTrademark implements Trademark
{
    public $color = 'Blue';
    public $trademark = 'Cross';
    public $price = 2000;

    public function company()
    {
        return 'Шариковая ручка фирмы Cross';
    }
}

$ballPen = new PenTrademark();

$ballPen->color;
$ballPen->trademark;
$ballPen->price;

class OtherPen extends PenTrademark
{
    public function company()
    {
        return 'Шариковая ручка фирмы Erich Krause';
    }
}

$otherPen = new OtherPen();

$otherPen->color = 'Green';
$otherPen->trademark = 'Erich Krause';
$otherPen->price = 200;


interface DuckColor
{
    public function color();
}

class Ducks implements DuckColor
{
    public $color = 'Gray';
    public $name = 'Sean';

    public function color()
    {
        return 'Утка серого цвета';
    }
}

$duck = new Ducks();

$duck->color;
$duck->name;

class Anas extends Ducks
{
    public function color()
    {
        return 'А эта утка коричневого цвета';
    }
}

$anas = new Anas();

$anas->color = 'Brown';
$anas->name = 'River Duck';

interface Discount
{
    public function discount();
}

class ProductDiscount implements Discount
{
    public $trademark = 'Karcher';
    public $price = 60000;
    public $discount = 10;
    public $name = 'Vacuum cleaner';

    public function discount()
    {
        return 'На этот товар скидка 10 процентов';
    }
}

$product = new ProductDiscount();

$product->trademark;
$product->price;
$product->discount;
$product->name;

class PulloverDiscount extends ProductDiscount
{
    public function discount()
    {
        return 'На этот товар скидка 15 процентов';
    }
}

$pullover = new PulloverDiscount();

$pullover->trademark = 'Adidas';
$pullover->price = 3000;
$pullover->discount = 15;
$pullover->name = 'Autumn Collection';