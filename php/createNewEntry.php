<?php 

require_once("../php/functions.php");


$database =  new PDO('mysql:host=localhost;dbname=recipebook',"root","");

if (isset($_POST["recipe-title"])) {
    
    $recipeTitle = validateData($_POST["recipe-title"]);
    $recipeSubtitle = validateData($_POST["recipe-subtitle"]);
    $recipeIngredients = validateData($_POST["recipe-ingredients"]);
    $recipeInstructions = validateData($_POST["recipe-insrtuctions"]);
    
    // echo $_POST["recipe-title"];
    // echo $_POST["recipe-ingredients"];


    $database->query('INSERT INTO `recipes` (`id`, `title`, `subtitle`, `instructions`, `appliances`, `added`) 
    VALUES (NULL, "$recipeTitle","$recipeSubtitle","$recipeInstructions", NULL, current_timestamp())');

}




header('Location: ./../views/recipe.php?id=2');