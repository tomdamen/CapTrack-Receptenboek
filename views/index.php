<!DOCTYPE html>
<html lang="en">

<?php
    require_once("../php/header.php");
    require_once("../php/footer.php");
    require_once("../php/functions.php");
    require_once("../php/getAllRecipes.php");
    require_once("../php/createRecipeGrid.php");
    
    $allRecipes = getAllRecipes();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css?v=<?php echo time(); ?>">
    <title>Receptenboek</title>
</head>

<body>

    <?= makeHeader(); ?>

    <section class="home-introduction">
        <p>Welkom bij het receptenboek van Esma en Tom</p>
        <p>Wij houden van de Italiaanse keuken! Hieronder kun je onze favoriete recepten vinden. Met deze recepten waan
            je je in een handomdraai in het mooie Italië. Of je nu een pizza salami wil maken of een heerlijke tiramisu,
            hier is alles te vinden!</p>
    </section>

    <section class="home-recipe-grid">
        <?= createRecipeGrid($allRecipes); ?>
    </section>

    <?= makeFooter(); ?>
</body>

</html>