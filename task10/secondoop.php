<?php

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

class BallPointPen implements Trademark
{
    public $color = 'Blue';
    public $trademark = 'Cross';
    public $price = 2000;

    public function company()
    {
        return 'Шариковая ручка фирмы Cross';
    }
}

$ballPen = new BallPointPen();

$ballPen->color;
$ballPen->trademark;
$ballPen->price;

class OtherPen extends BallPointPen
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

class Duck implements DuckColor
{
    public $color = 'Gray';
    public $name = 'Sean';

    public function color()
    {
        return 'Утка серого цвета';
    }
}

$duck = new Duck();

$duck->color;
$duck->name;

class Anas extends Duck
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

class Product implements Discount
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

$product = new Product();

$product->trademark;
$product->price;
$product->discount;
$product->name;

class Pullover extends Product
{
    public function discount()
    {
        return 'На этот товар скидка 15 процентов';
    }
}

$pullover = new Pullover();

$pullover->trademark = 'Adidas';
$pullover->price = 3000;
$pullover->discount = 15;
$pullover->name = 'Autumn Collection';