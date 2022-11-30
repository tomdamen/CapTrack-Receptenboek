<!DOCTYPE html>
<html lang="en">

<?php 
require_once("../php/classes/Database.php");
require_once("../php/classes/Recipe.php");
require_once("../php/functions.php");

isset($_GET["id"]) ? $currentId = $_GET["id"] : $currentId = 1;

$databaseClass = new Database();

$currentRecipe = $databaseClass->queryById($currentId);

// $ingredientsArray = splitOnNewLine($currentRecipe[0]["ingredients"]);
$instructionArray = splitOnNewLine($currentRecipe[0]["instructions"]);

// $user = "root";
// $pass = "";

// $db = new PDO('mysql:host=localhost;dbname=recipebook',$user,$pass);

// $stmt = $db->prepare("SELECT * FROM ingredientsrecipes RIGHT JOIN ingredients ON ingredientsrecipes.ingredient_id = ingredient_id WHERE ingredientsrecipes.recipe_id = recipe_id");

// $stmt->execute();
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$repice = new Recipe();
$rows = $repice->getIngredients(1);
echo '<pre>';
print_r($rows);
// print_r($currentInstructions);

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
                    <?= createListFromArray($ingredientsArray) ?>
                </ul>
            </section>

            <section class="recipe-how-to">
                <h2>Bereidingswijze:</h2>
                <ol>
                    <?= createListFromArray($instructionArray) ?>
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