<!DOCTYPE html>
<html lang="en">

<?php 
require_once("../php/classes/Database.php");
require_once("../php/classes/Recipe.php");
require_once("../php/functions.php");

isset($_GET["id"]) ? $currentId = $_GET["id"] : $currentId = 1;

$recipeDatabase = new PDO('mysql:host=localhost;dbname=recipebook',"root","");
// print_r($allRecipes);


$currentRecipe = $recipeDatabase->query("SELECT * FROM recipes WHERE id = $currentId")->fetchAll();
$recipeIngredients = $recipeDatabase->query("SELECT * FROM ingredientsrecipes RIGHT JOIN ingredients ON ingredientsrecipes.ingredient_id = ingredients.id WHERE ingredientsrecipes.recipe_id = $currentId")->fetchAll();

echo "<pre>";
print_r($currentRecipe);
echo "</pre>";



?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">

    <title><?= $currentRecipe[0]["title"] ?></title>
</head>

<body>

    <body>

        <div class="bg-primary">
            <header>
                <div class="header-logo">
                    <a href="./index.php"><img src="./images/logo.png" width="100" alt=""></a>
                </div>
                <div class="header-title">
                    <p>super awesome recipe book</p>
                </div>
                <nav class="header-nav">
                    <a href="./index.php">Homepagina</a>
                    <a href="./contact.html">Contact</a>
                </nav>
            </header>
        </div>

        <section class="recipe-title">
            <div class="recipe-title-text">
                <h1><?= $currentRecipe[0]["title"] ?></h1>
                <p><?= $currentRecipe[0]["subtitle"] ?></p>
                <p class="gray-text"><?= $currentRecipe[0]["added"] ?></p>
            </div>
            <div class="recipe-title-image">
                <img src="./images/<?= removeSpaces($currentRecipe[0]["title"]) ?>.jpg" alt="Spaghetti Bolognese" srcset="">
            </div>
        </section>

        <div class="recipe-wrapper">
            <section class="recipe-ingredients">
                <h2>Ingrediënten:</h2>
                <ul>
                    <?php 
                        foreach ($recipeIngredients as $ingredient) {
                            echo "<li>" . $ingredient["ingredient"] . "</li>";
                        }
                    
                    ?>
                </ul>
            </section>

            <section class="recipe-how-to">
                <h2>Bereidingswijze:</h2>
                <ol>
                    <?php 
                    $instructionArray = splitOnNewLine($currentRecipe[0]["instructions"]);
                        foreach ($instructionArray as $instruction) {
                            echo "<li>" . $instruction . "</li>";
                            
                        }
                    ?>
                </ol>
            </section>
        </div>

        <div class="footer-div">
            <footer>
                <div class="bg-primary">
                    <p class="text-center">&#169; 2022 Esma and Tom Productions</p>
                </div>
            </footer>
        </div>

    </body>

</html>