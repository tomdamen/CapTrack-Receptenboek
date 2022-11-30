<?php

require_once("../php/classes/Database.php");

class Recipe {

    private $database;
    public $currentRecipe;
    public $ingredients;
    public $idQueryIngredients;
    private $user;
    private $pass;
    private $db;
    private $stmt;
    private $rows;

    // public function __construct($id) {
    //     $this->database = new Database();
    //     $this->currentRecipe = $this->database->queryById($id);
    // }


    function getInstructions() {
        return $this->currentRecipe[0]["instructions"];
    }
    
    
    function getIngredients($recipeId) {
        $this->user = "root";
        $this->pass = "";

        $this->db = new PDO('mysql:host=localhost;dbname=recipebook',$this->user,$this->pass);

        $this->stmt = $this->db->prepare("SELECT * FROM ingredientsrecipes RIGHT JOIN ingredients ON ingredientsrecipes.ingredient_id = ingredient_id WHERE ingredientsrecipes.recipe_id = $recipeId");

        $this->stmt->execute();
        return $this->rows = $this->stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    
    
    function getAppliances() {
    

    }



}