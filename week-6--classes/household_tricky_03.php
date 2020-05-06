<?php

declare(strict_types=1);

// person
class Person 
{
    // properties
    private $name;
    private $age;

    // constructor
    public function __contruct(string $name, int $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }

    // methods
    // get age
    public function getAge() : int
    {
        return $this->age;
    }
}

// house
class House
{
    // static methods
    public static function census(array $houses) : array
    {
        $census = [];

        foreach ($houses as $house) {
            $census = array_merge($census, $house->getDwellers());
        }

        return $census;
    }

    // properties
    private $dwellers = [];

    // methods

    // add dwellers
    public function addDweller(object $person) : object
    {
        $this->dwellers[] = $person;
        return $this;
    }

    // get dwellers
    public function getDwellers() : array
    {
        return $this->dwellers;
    }
}

// create some people
$carlton = new Person("Carlton", 25);
$ida = new Person("Ida", 32);
$estelle = new Person("Estelle", 57);
$jana = new Person("Jana", 48);

// create a house and put some peeps in
$house1 = new House();
$house1->addDweller($carlton)
       ->addDweller($ida);

// create another house and put some other peeps in
$house2 = new House();
$house2->addDweller($estelle)
       ->addDweller($jana);

// get back an array with all Person objects from the houses
// the actual output will be a bit messier
// but check it has the right number of people
var_dump(House::census([$house1, $house2])); // array(4) [$carlton, $ida, $estelle, $jana]
var_dump(House::census([$house2])); // array(2) [$estelle, $jana]

// return the average ages of the houses
// var_dump(House::averageAge([$house1, $house2])); // float(40.5)
// var_dump(House::averageAge([$house1])); // float(28.5)