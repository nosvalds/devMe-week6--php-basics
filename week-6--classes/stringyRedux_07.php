<?php

declare(strict_types=1);

// class
class StringyRedux 
{
    // properties
    private $str;

    // constructor
    public function __construct(string $str)
    {
        $this->str = $str;
    }

    // methods

    // get 
    public function get() : string
    {
        return $this->str;
    }
    
    // lowercase
    public function lower() : object
    {
        $this->str = strtolower($this->str);
        return $this;
    }

    // upper
    public function upper() : object
    {
        $this->str = strtoupper($this->str);
        return $this;
    }

    // append
    public function append(string $newStr) : object
    {
        $this->str = "{$this->str}{$newStr}";
        return $this;
    }

    // repeat
    public function repeat(int $mult) : object
    {
        $this->str = str_repeat($this->str, $mult);
        return $this;
    }
}

$string1 = new StringyRedux("Oop");
var_dump($string1->lower()->repeat(2)->get()); // string(6) "oopoop"

$string2 = new StringyRedux("Spoon");
var_dump($string2->repeat(2)->upper()->append("!")->get()); // string(11) "SPOONSPOON!"

$string3 = new StringyRedux("Na");
var_dump($string3->repeat(2)->append(" ")->repeat(8)->append(" ")->append("Batman!")->get()); // string(48) "NaNa NaNa NaNa NaNa NaNa NaNa NaNa NaNa  Batman!"