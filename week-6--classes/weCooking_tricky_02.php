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
        $this->name = $name;
        $this->dietaryNotes = $dietaryNotes;
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
// In your Recipe class, working out how to display the recipe takes quite a bit of processing. As does checking the dietary requirements. Update the Recipe class so that it caches the result of the display() and dietary() methods. Make sure the cache is cleared when you add a new ingredient or method.

// Hint: You can place some echo calls around the file to check if a bit of code is running multiple times.

class Recipe 
{
    // properties
    private $name;
    private $ingredients = [];
    private $method = "";

    // constructor
    public function __construct(string $name)     
    {
        $this->name = $name;
    }

    // methods

    // add Ingredients to Recipe
    public function addIngredient(object $ingredient, $amount) : object
    {
        $this->ingredients[] = 
        [
            "ingredient" => $ingredient,
            "amount" => $amount,
        ];

        return $this;
    }

    // add recipe method
    public function addMethod(string $method) : object
    {
        $this->method = $method;
        return $this;
    }

    // display
    public function display() : string
    {
        // Recipe Name
        $displayStr = "{$this->name}\n\n";

        // Ingredients header
        $displayStr .= "Ingredients\n\n";

        // Ingredients
        foreach ($this->ingredients as $ingredient) {
            $displayStr .= "- "; // dash
            $displayStr .= "{$ingredient['amount']} "; // amount
            $displayStr .= "{$ingredient['ingredient']->getName()}\n"; // ingredient name
        }

        // Method
        $displayStr .= "\nMethod\n\n";
        $displayStr .= "{$this->method}";

        return $displayStr;
    }

    // dietary info list array
    private function dietaryArray() : array
    {
        $dietaryList = [];
        
        foreach ($this->ingredients as $ingredient) { // loop over ingredients
            $dietAry = $ingredient["ingredient"]->getDietaryNotes(); // get dietary array
            foreach ($dietAry as $dietaryItem) { // loop over that array and make a single array of all dietary restrictions
                $dietaryList[] = $dietaryItem;
            }
        }

        return array_unique($dietaryList); // remove duplicates
    }

    public function dietary() : string
    {
        return implode(", ", $this->dietaryArray()); // implode to turn into a string and return
    }

    // vegan?
    public function vegan() : bool
    {
        return array_search("animal produce", $this->dietaryArray()) === false;
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

// ADDITIONAL TEST

// new ingredients
$almondButter = new Ingredient("Almond Butter", []);

// a recipe takes a name
$veganCake = new Recipe("Vegan Cake");

// we can add ingredients plus amounts
$veganCake->addIngredient($flour, "500g");
$veganCake->addIngredient($sugar, "55g");
$veganCake->addIngredient($almondButter, "50g");

// we can add a method
$veganCake->addMethod("Put them in a bowl, mix them together, cook for a bit. Feel good about yourself.");

// we can see the recipe
var_dump($veganCake->display());

// we can list dietary information
var_dump($veganCake->dietary()); // string(29) "gluten, animal produce, dairy"

// is the recipe vegan? (i.e. contains animal produce)
var_dump($veganCake->vegan()); // bool(false)