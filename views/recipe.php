<!DOCTYPE html>
<html lang="en">

<?php 
require_once("../php/classes/Recipe.php");
require_once("../php/functions.php");

isset($_GET["id"]) ? $currentId = $_GET["id"] : $currentId = 1;

$recipe = new Recipe($currentId);

// echo "<pre>";
// print_r($recipe);
// echo "</pre>";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css?v=<?php echo time(); ?>">

    <title><?= $recipe->getTitle() ?></title>
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
                    <a href="./addRecipe.php">Toevoegen +</a>
                </nav>
            </header>
        </div>

        <section class="recipe-title">
            <div class="recipe-title-text">
                <h1><?= $recipe->getTitle() ?></h1>
                <p><?= $recipe->getSubtitle() ?></p>
                <p class="gray-text"><?= $recipe->getAdded() ?></p>
            </div>
            <div class="recipe-title-image">
                <img src="./images/<?= removeSpaces($recipe->getTitle()) ?>.jpg" alt="<?= $recipe->getTitle() ?>" srcset="">
            </div>
        </section>

        <div class="recipe-wrapper">
            <section class="recipe-ingredients">
                <h2>Ingrediënten:</h2>
                <ul>
                    <?php 
                        foreach ($recipe->getIngredients() as $ingredient) {
                            echo "<li>" . $ingredient["ingredient"] . "</li>";
                        }
                    
                    ?>
                </ul>
            </section>

            <section class="recipe-how-to">
                <h2>Bereidingswijze:</h2>
                <ol>
                    <?php 
                        foreach ($recipe->getInstructions() as $instruction) {
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