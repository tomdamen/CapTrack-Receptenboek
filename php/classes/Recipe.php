<?php

require_once("../php/classes/Database.php");

class Recipe {

    private $database;
    public $currentRecipe;
    public $ingredients;



    public function __construct($id) {

        $this->database = new Database();
        $this->currentRecipe = $this->database->queryById($id);



    }




    function getInstructions() {
        return $this->currentRecipe[0]["instructions"];



    }
    
    
    function getIngredients($recipeId) {
        $this->ingredients = $this->currentRecipe->query("SELECT id,ingredients FROM ingredients WHERE ingredientsrecipes.recipe_id = $recipeId")
        
    }
    
    
    function getAppliances() {
    

    }



}