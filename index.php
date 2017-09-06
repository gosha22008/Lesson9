<?php

class Car
{
    public $mark;
    public $maxSpeed;

    public function go()
    {
        echo 'Поехали!<br>';
    }

    public function stop()
    {
        echo 'Стоп!';
    }
}

class TV
{
    public $model;
    public $diagonal;

    public function show()
    {
        echo 'Покажи что там <br>';
    }

    public function changeChannels()
    {
        echo 'Изменить канал';
    }
}

class BallPen
{
    public $color;

    public function write()
    {
        echo 'Написать что-либо<br>';
    }
}

class Duck
{
    public $variety;
    public $weight;

    public function fly()
    {
        echo 'Полетели<br>';
    }

    public function eat()
    {
        echo 'Покушать ';
    }
}

class Product
{
    public $name;
    public $price;
    public $discount;

    public function getPriceWithDiscount()
    {
        echo $this->price-(($this->price/100) * $this->discount) ;

    }
}

//Car
$car1 = new Car();
$car2 = new Car();
$car1->mark = 'mazda';
$car1->maxSpeed = 250;
$car1->go();
//TV
$tv1 = new TV();
$tv1->model = 'samsung';
$tv1->diagonal = 61;
$tv1->show();
//BallPen
$pen1 = new BallPen();
$pen1->color = 'red';
$pen1->write();
//Duck
$duck1 = new Duck();
$duck1->weight = '5';
$duck1->fly();
//Product
$product1 = new Product();
$product1->name = 'phone';
$product1->price = 5000;
$product1->discount = 10;
$product1->getPriceWithDiscount();



