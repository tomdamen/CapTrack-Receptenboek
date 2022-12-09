<!DOCTYPE html>
<html lang="en">

<?php
    require_once("../php/header.php");
    require_once("../php/footer.php");
    require_once("../php/functions.php");
    require_once("../php/getAllRecipes.php");
    require_once("../php/createRecipeGrid.php");
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

    <section class="pageNotFound">
        <p>Helaas! Het recept dat u wilde zoeken is niet beschikbaar.</p>
        <a href="./index.php">Terug naar de Homepagina</a>
    </section>


    <?= makeFooter(); ?>

</body>

</html>