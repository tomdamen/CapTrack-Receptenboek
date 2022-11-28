<!DOCTYPE html>
<html lang="en">

<?php 
require_once("../php/classes/Database.php");
require_once("../php/functions.php");

function splitOnNewLine(string $inputString) : array {
    return preg_split("/\r\n|\n|\r/", $inputString);
}


$databaseClass = new Database();

$queryById = $databaseClass->queryById(1);


$ingredientsArray = splitOnNewLine($queryById[0]["ingredients"]);
$instructionArray = splitOnNewLine($queryById[0]["instructions"]);



?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">

    <title></title>
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
                <h1><?= $queryById[0]["title"] ?></h1>
                <p><?= $queryById[0]["subtitle"] ?></p>
                <p><?= $queryById[0]["added"] ?></p>
            </div>
            <div class="recipe-title-image">
                <img src="./images/PizzaSalami.jpg" alt="Spaghetti Bolognese" srcset="">
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