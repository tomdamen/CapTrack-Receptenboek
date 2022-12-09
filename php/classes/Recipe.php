<?php


class Recipe {

    public $id;
    public $ingredients;
    public $currentRecipeIngredients;


    public function __construct($id) {
        $database = new PDO('mysql:host=localhost;dbname=recipebook',"root","");
        $currentRecipe = $database->query("SELECT * FROM `recipes` WHERE `id` = $id")->fetchAll()[0];

        $this->title = $currentRecipe["title"];
        $this->subtitle = $currentRecipe["subtitle"];
        $this->added = $currentRecipe["added"];
        $this->instructions = $currentRecipe["instructions"];
        $this->ingredients = $database->query("SELECT * FROM ingredientsrecipes RIGHT JOIN ingredients ON ingredientsrecipes.ingredient_id = ingredients.id WHERE ingredientsrecipes.recipe_id = $id")->fetchAll();
    
    }

    function getTitle() : string {
        return $this->title;
    }

    function getSubtitle() : string {
        return $this->subtitle;
    }

    function getAdded() : string {
        return $this->added;
    }

    function getInstructions() : Array {
        return splitOnNewLine($this->instructions);
    }
    
    function getIngredients() : Array {
        return $this->ingredients;
    }

}