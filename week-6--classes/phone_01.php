<?php

declare(strict_types=1);

// ... your class here
class Phone 
{
    // properties
    private $make;
    private $model;

    // constructor
    public function __construct(string $make, string $model)
    {
        $this->make = $make;
        $this->model = $model;
    }

    // methods

    // model
    public function model() : string
    {
        return $this->model;
    }

    // make
    public function make() : string
    {
        return $this->make;
    }
}

// create three phones
$iPhone = new Phone("Apple", "iPhone XS");
$galaxy = new Phone("Samsung", "Galaxy");
$retro = new Phone("Nokia", "3210");

// use methods to find out model/make
var_dump($iPhone->model()); // string(9) "iPhone XS"
var_dump($retro->make()); // string(5) "Nokia"
var_dump($galaxy->make()); // string(7) "Samsung"
var_dump($iPhone->make()); // string(5) "Apple"