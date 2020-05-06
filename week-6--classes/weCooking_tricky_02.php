<?php

declare(strict_types=1);

// ... your classes here

// Ingredient class
class Ingredient 
{
    // properties
    private $name;
    private $dietaryNotes;
    
    // constructor
    public function __construct(string $name, array $dietaryNotes)  
    {
        $this->$name = $name;
        $this->$dietaryNotes = $dietaryNotes;
    }

    // methods

    // name
    public function getName() : string
    {
        return $this->name;
    }

    // dietary notes
    public function getDietaryNotes() : array
    {
        return $this->dietaryNotes;
    }
}

// Recipe Class
class Recipe 
{
    // properties
    private $name;
    private $ingredients;
    private $method;

    // constructor
    public function __construct(string $name)     
    {
        $this->name = $name;
    }

    // methods

    // add Ingredients to Recipe
    public function addIngredient(object $ingredient, string $amount) : object
    {
        $this->ingredients[] = $ingredient;
    }

    // add recipe method
    public function addMethod(string $method) : object
    {
        $this->method = $method;
        return $this;
    }
}

// ingredients take a name, followed by an array of dietary notes
$flour = new Ingredient("Flour", ["gluten"]);
$eggs = new Ingredient("Eggs", ["animal produce"]);
$sugar = new Ingredient("Sugar", []);
$butter = new Ingredient("Butter", ["dairy", "animal produce"]);

// a recipe takes a name
$cake = new Recipe("Cake");

// we can add ingredients plus amounts
$cake->addIngredient($flour, "200g");
$cake->addIngredient($butter, "100g");
$cake->addIngredient($sugar, "50g");
$cake->addIngredient($eggs, 2);

// we can add a method
$cake->addMethod("Put them in a bowl, mix them together, cook for a bit. Job's a good'un");

// we can see the recipe
var_dump($cake->display());
/*
    string(146) "Cake

    Ingredients

    - 200g Flour
    - 100g Butter
    - 50g Sugar
    - 2 Eggs

    Method

    Put them in a bowl, mix them together, cook for a bit. Job's a good'un"
 */

// we can list dietary information
var_dump($cake->dietary()); // string(29) "gluten, animal produce, dairy"

// is the recipe vegan? (i.e. contains animal produce)
var_dump($cake->vegan()); // bool(false)