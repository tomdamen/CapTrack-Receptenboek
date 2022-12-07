<!DOCTYPE html>
<html lang="en">

<?php
    require_once("../php/functions.php");
    require_once("../php/getAllRecipes.php");
    require_once("../php/createRecipeGrid.php");
    
    $allRecipes = getAllRecipes();
// echo "<pre>";
// print_r($allRecipes);
// echo "</pre>";

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css?v=<?php echo time(); ?>">
    <title>Receptenboek</title>
</head>

<body>

    <div class="bg-primary" style="background='black'">
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

    <section class="pageNotFound">
        <p>Helaas! Het recept dat u wilde zoeken is niet beschikbaar.</p>
        <a href="./index.php">Terug naar de Homepagina</a>
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