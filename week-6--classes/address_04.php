<?php

declare(strict_types=1);

// class

class Address 
{
    // properties
    private $street;
    private $postCode;
    private $town;

    // constructor
    public function __construct(string $street, string $postCode, string $town) 
    {
        $this->street = $street;
        $this->postCode = $postCode;
        $this->town = $town;
    }

    // methods

    // set street
    public function setStreet(string $street) : object 
    {
        $this->street = $street;
        return $this;
    }

    // set postCode
    public function setPostCode(string $postCode) : object 
    {
        $this->postCode = $postCode;
        return $this;
    }

    // set town
    public function setTown(string $town) : object 
    {
        $this->town = $town;
        return $this;
    }

    // full address
    public function fullAddress() : string
    {
        return "{$this->street}, {$this->town}, {$this->postCode}";
    }
}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
var_dump($address->fullAddress()); // string(34) "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
// using chaining
$address->setStreet("12 Cantelope Way")
        ->setPostcode("SW5 8RQ")
        ->setTown("Swansea");

// logs the new full address neatly
var_dump($address->fullAddress()); // string(34) "12 Cantelope Way, SW5 8RQ, Swansea"