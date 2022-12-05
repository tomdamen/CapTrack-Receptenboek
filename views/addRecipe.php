<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css?v=<?php echo time(); ?>">
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
                <a href="./addRecipe.php">Toevoegen +</a>
            </nav>
        </header>
    </div>

    <section class="add-recipe">
        <form action="./../php/createNewEntry.php" method="post" enctype="multipart/form-data">
            <label for="recipe-title">Titel</label>
            <input type="text" id="recipe-title" name="recipe-title" required>

            <label for="recipe-subtitle">Ondertitel</label>
            <input type="text" id="recipe-subtitle" name="recipe-subtitle" required>

            <label for="recipe-ingredients">Ingrediënten</label>
            <textarea id="recipe-ingredient" name="recipe-ingredients" required></textarea>

            <label for="recipe-instructions">Bereidingswijze</label>
            <textarea id="recipe-instructions" name="recipe-insrtuctions" required></textarea>

            <label for="recipe-image">Foto uploaden:</label>
            <input type="file" id="recipe-image" name="recipe-image" required>

            <input type="submit" value="Inzenden">

        </form>
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