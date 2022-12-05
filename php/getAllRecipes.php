<?php



function getAllRecipes() : array {
    $database =  new PDO('mysql:host=localhost;dbname=recipebook',"root","");

    $allRecipes = $database->query("SELECT id, title FROM recipes")->fetchAll();

    return $allRecipes;



}