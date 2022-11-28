<!DOCTYPE html>
<html lang="en">

<?php
    require_once("../php/functions.php");
    require_once("../php/classes/Database.php");
    $temporaryDatabase = new Database;
    $allTitles = $temporaryDatabase->queryTitles();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Receptenboek</title>
</head>

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

    <section class="home-introduction">
        <p>Welkom bij het receptenboek van Esma en Tom</p>
        <p>Wij houden van de Italiaanse keuken! Hieronder kun je onze favoriete recepten vinden. Met deze recepten waan
            je je in een handomdraai in het mooie Italië. Of je nu een pizza salami wil maken of een heerlijke tiramisu,
            hier is alles te vinden!</p>
    </section>

    <section class="home-recipe-grid">

        <?= makeRecipeGrid($allTitles) ?>

        <!-- <a href="./recipe.php" class="home-recipe">
            <img src="./images/SpaghettiBolognese.jpg" alt="">
            <p class="text-center">Spaghetti Bolognese</p>
        </a>
        <a href="./pizzaSalami.html" class="home-recipe">
            <img src="./images/PizzaSalami.jpg" alt="">
            <p class="text-center">Pizza Salami</p>
        </a>
        <a href="./tiramisu.html" class="home-recipe">
            <img src="./images/Tiramisu.jpg" alt="">
            <p class="text-center">Tiramisu</p>
        </a>
        <a href="./pruimentaart.html" class="home-recipe">
            <img src="./images/Pruimentaart.jpg" alt="">
            <p class="text-center">Pruimentaart</p>
        </a> -->
    </section>

    <div class="footer-div">
        <footer>
            <div class="bg-primary">
                <p class="text-center">&#169; 2022 Esma and Tom Productions</p>
            </div>
        </footer>
    </div>

</body>

</html>