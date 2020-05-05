<?php

declare(strict_types=1);

// class
class LightSwitch 
{
    // properties
    private $on = false; // light starts off as default
    
    // methods

    // isOn?
    public function isOn() 
    {
        return $this->on;
    }

    // turn on
    public function turnOn() 
    {
        $this->on = true;
        return $this;
    }

    // turn off
    public function turnOff() 
    {
        $this->on = false;
        return $this;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
var_dump($lightSwitch->isOn()); // bool(false)

// you can turn it on
$lightSwitch->turnOn();
var_dump($lightSwitch->isOn()); // bool(true)

// you can turn it off
$lightSwitch->turnOff();
var_dump($lightSwitch->isOn()); // bool(false)