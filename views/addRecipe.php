<!DOCTYPE html>
<html lang="en">

<?php 
    require_once("../php/header.php");
    require_once("../php/footer.php");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css?v=<?php echo time(); ?>">
    <title>Receptenboek</title>
</head>

<body>

    <?= makeHeader() ?>

    <section class="add-recipe">
        <form action="./../php/createNewEntry.php" method="post" enctype="multipart/form-data">
            <label for="recipe-title">Titel</label>
            <input type="text" id="recipe-title" name="recipe-title" required>

            <label for="recipe-subtitle">Ondertitel</label>
            <input type="text" id="recipe-subtitle" name="recipe-subtitle" required>

            <label for="recipe-ingredients">Ingrediënten <br/> (elk ingredient op een nieuwe regel)</label>
            <textarea id="recipe-ingredient" name="recipe-ingredients" required></textarea>

            <label for="recipe-instructions">Bereidingswijze <br/> (elke stap op een nieuwe regel)</label>
            <textarea id="recipe-instructions" name="recipe-insrtuctions" required></textarea>

            <label for="recipe-image">Foto uploaden:</label>
            <input type="file" id="recipe-image" name="recipe-image" required>

            <input type="submit" value="Inzenden">

        </form>
    </section>

    <?= makeFooter(); ?>
   
</body>

</html>