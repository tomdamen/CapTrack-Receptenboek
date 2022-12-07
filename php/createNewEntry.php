<?php 

require_once("../php/functions.php");


$database =  new PDO('mysql:host=localhost;dbname=recipebook',"root","");

if (isset($_POST["recipe-title"])) {
    
    $recipeTitle = validateData($_POST["recipe-title"]);
    $recipeSubtitle = validateData($_POST["recipe-subtitle"]);
    $recipeIngredients = splitOnNewLine(validateData($_POST["recipe-ingredients"]));
    $recipeInstructions = validateData($_POST["recipe-insrtuctions"]);

    // $recipeData = makeVariablesFromPost($_POST);
    // $recipeData = $_POST["recipe-title"];
    // print_r($recipeData);

    $imagePath = "./../views/images/";
    $imageTemp = $_FILES["recipe-image"]["tmp_name"];
    move_uploaded_file($imageTemp,$imagePath . removeSpaces($recipeTitle) . ".jpg");



    $database->query("INSERT INTO `recipes` (`id`, `title`, `subtitle`, `instructions`, `appliances`, `added`) 
    VALUES (NULL, '$recipeTitle','$recipeSubtitle','$recipeInstructions', NULL, current_timestamp())");


    $newId = $database->query("SELECT LAST_INSERT_ID()")->fetchAll()[0][0];

    foreach($recipeIngredients as $ingredient) {
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


// function makeVariablesFromPost($POST) {
//     $recipeTitle = validateData($POST["recipe-title"]);
//     $recipeSubtitle = validateData($POST["recipe-subtitle"]);
//     $recipeIngredients = splitOnNewLine(validateData($POST["recipe-ingredients"]));
//     $recipeInstructions = validateData($POST["recipe-insrtuctions"]);
//     print_r($recipeTitle);
//     return $data = array("recipeTitle" => $recipeTitle,"recipeSubtitle" => $recipeSubtitle, 
//     "recipeIngredients" => $recipeIngredients, "recipeInstructions" => $recipeInstructions);
// }




