<?php

declare(strict_types=1);

// class
class Stringy 
{
    // properties
    private $str;

    // constructor
    public function __construct(string $str)
    {
        $this->str = $str;
    }

    // methods

    // lowercase
    public function lower() : string
    {
        return strtolower($this->str);
    }

    // upper
    public function upper() : string
    {
        return strtoupper($this->str);
    }

    // append
    public function append(string $newStr) : string
    {
        return "{$this->str}{$newStr}";
    }

    // repeat
    public function repeat(int $mult) : string
    {
        return str_repeat($this->str, $mult);
    }
}

$string = new Stringy("Na");

// it can lowercase a string
var_dump($string->lower()); // string(2) "na"

// it can uppercase a string
var_dump($string->upper()); // string(2) "NA"

// it can concatenate
var_dump($string->append("blah")); // string(6) "Nablah"

// it can repeat a string
var_dump($string->repeat(5)); // string(10) "NaNaNaNaNa"