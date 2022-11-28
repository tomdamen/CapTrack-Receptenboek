<?php



function makeRecipeGrid(array $recipeArray) : string {
    $returnString = "";
    foreach ($recipeArray as $recipe) {
        $returnString = $returnString . '<a href="./recipe.php" class="home-recipe"><img src="./images/' . removeSpaces($recipe["title"]) . '.jpg" alt=""><p class="text-center">' .  $recipe["title"] . '</p></a>';
    }    
    return $returnString;
}

function removeSpaces(string $stringWithSpaces) : string {
    return str_replace(" ", "", $stringWithSpaces);
}

function createListFromArray($array) {
    $outputString = "";
    foreach ($array as $line) {
        $outputString = $outputString . "<li>" . $line . "</li>";
    }

    return $outputString;
}
