<?php


function makeHeader() : string {
    return '<div class="bg-primary" style="background=\'black\'">
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
    </div>';
}


