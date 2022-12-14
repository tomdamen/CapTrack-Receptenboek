<?php 

require_once("../php/functions.php");

if (isset($_POST["recipe-title"])) {

    $database =  new PDO('mysql:host=localhost;dbname=recipebook',"root","");
    $postDataTitle = postData();

    imageSave();
    databaseUpdate($database);
}

function imageSave() {

    $postDataTitle = postData();
    
    $imagePath = "./../views/images/";
    $imageTemp = $_FILES["recipe-image"]["tmp_name"];
    move_uploaded_file($imageTemp,$imagePath . removeSpaces($postDataTitle['recipeTitle']) . ".jpg");
}

function databaseUpdate(PDO $database) {

    $postData = postData();

    $postDataTitle = $postData['recipeTitle'];
    $postDataSubtitle = $postData['recipeSubtitle'];
    $postDataInstructions = $postData['recipeInstructions'];
    $postDataIngredients = $postData['recipeIngredients'];

    $database->query("INSERT INTO `recipes` (`id`, `title`, `subtitle`, `instructions`, `appliances`, `added`) 
    VALUES (NULL, '$postDataTitle','$postDataSubtitle','$postDataInstructions', NULL, current_timestamp())");

    $newId = $database->query("SELECT LAST_INSERT_ID()")->fetchAll()[0][0];
    
    foreach($postDataIngredients as $ingredient) {
        $ingredientId;
        if ($database->query("SELECT `id` FROM `ingredients` WHERE `ingredient` = '$ingredient'")->fetchAll()) {
            $ingredientId = $database->query("SELECT `id` FROM `ingredients` WHERE `ingredient` = '$ingredient'")->fetchAll()[0][0];
        } else {
            $database->query("INSERT INTO `ingredients` (`id`, `ingredient`) VALUES (NULL,'$ingredient')");
            $ingredientId = $database->query("SELECT LAST_INSERT_ID()")->fetchAll()[0][0];
        }
        $database->query("INSERT INTO `ingredientsrecipes` (`ingredient_id`,`recipe_id`) VALUES ('$ingredientId','$newId')");
    }

    header("Location: ./../views/recipe.php?id=$newId");
}

function postData() : Array {
    
    $recipeTitle = validateData($_POST["recipe-title"]);
    $recipeSubtitle = validateData($_POST["recipe-subtitle"]);
    $recipeIngredients = splitOnNewLine(validateData($_POST["recipe-ingredients"]));
    $recipeInstructions = validateData($_POST["recipe-insrtuctions"]);

    return array(
        "recipeTitle"=> $recipeTitle, 
        "recipeSubtitle"=> $recipeSubtitle, 
        "recipeIngredients"=> $recipeIngredients,
        "recipeInstructions"=> $recipeInstructions
    );
}
