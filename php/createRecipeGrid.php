<?php

function createRecipeGrid(array $allRecipes) : string {
    $gridString = "";
    foreach ($allRecipes as $recipe) {
        $gridString = $gridString . "<a href='./recipe.php?id=" . $recipe['id'] . "' class='home-recipe'>
                    <img src='./images/" . removeSpaces($recipe["title"]) . ".jpg' alt=''>
                    <p class='text-center'>" . $recipe['title'] . "</p>
                    </a>";
    }
    return $gridString;
}