<?php


class Recipe {

    public $id;
    private $database;
    public $currentRecipe;
    public $ingredients;
    public $currentRecipeIngredients;


    public function __construct($id) {
        $this->database = new PDO('mysql:host=localhost;dbname=recipebook',"root","");
        
        $this->currentRecipe = $this->database->query("SELECT * FROM recipes WHERE id = $id")->fetchAll();
        $this->currentRecipeIngredients = $this->database->query("SELECT * FROM ingredientsrecipes RIGHT JOIN ingredients ON ingredientsrecipes.ingredient_id = ingredients.id WHERE ingredientsrecipes.recipe_id = $id")->fetchAll();
    }

    function getTitle() {
        return $this->currentRecipe[0]["title"];
    }

    function getSubtitle() {
        return $this->currentRecipe[0]["subtitle"];
    }

        function getAdded() {
        return $this->currentRecipe[0]["added"];
    }

    function getInstructions() {
        $this->instructionString = $this->currentRecipe[0]["instructions"];
        return splitOnNewLine($this->instructionString);
    }
    
    function getIngredients() {
        return $this->currentRecipeIngredients;
    }

}