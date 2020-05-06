<?php

declare(strict_types=1);

// Item class

class BasketItem
{
    // properties
    private $description;
    private $price;

    // constructor
    public function __construct(string $description, float $price) 
    {
        $this->description = $description;
        $this->price = $price;
    }

    // methods

    // price
    public function getPrice() : float
    {
        return $this->price;
    }

    // description
    public function getDescription() : string
    {
        return $this->description;
    }
}

// Basket Class

class Basket
{
    // properties
    private $items = [];

    // methods

    // add items to basket
    public function add(BasketItem $newItem) : Basket
    {
        $this->items[] = $newItem;
        return $this;
    }

    // total
    public function total() : string
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }

        return "£" . number_format($total, 2);
    }

    // list items
    public function items() : array
    {
        $list = [];

        foreach ($this->items as $item) {
            $list[] = $item->getDescription();
        }
        
        return $list;
    }
}

$basket = new Basket();

$item1 = new BasketItem("coffee", 3.50);
$item2 = new BasketItem("tea", 2.50);

$basket->add($item1);
$basket->add($item2);

var_dump($basket->total()); // string(6) £6.00
var_dump($basket->items()); // array(2) { [0]=> string(6) "coffee" [1]=> string(3) "tea" }