<!DOCTYPE html>
<html lang="en">

<?php 
require_once("../php/header.php");
require_once("../php/footer.php");
require_once("../php/classes/Recipe.php");
require_once("../php/functions.php");

isset($_GET["id"]) ? $currentId = $_GET["id"] : $currentId = 1;

function isIdAvailable(int $id) : bool {
    $database = new PDO('mysql:host=localhost;dbname=recipebook',"root","");
    return !empty($database->query("SELECT * FROM `recipes` WHERE `id` = $id")->fetchAll());
}


if (isIdAvailable($currentId)) {
    $recipe = new Recipe($currentId);
} else {
    header("Location: ./../views/recipeNotFound.php");
}


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

    <?= makeHeader(); ?>

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
                <ol class="olinstruction">
                    <?php 
                        foreach ($recipe->getInstructions() as $instruction) {
                            echo "<li>" . $instruction . "</li>";
                        }
                    ?>
                </ol>
            </section>
        </div>

        <?= makeFooter(); ?>

    </body>

</html>