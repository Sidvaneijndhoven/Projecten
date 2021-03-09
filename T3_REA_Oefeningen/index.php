<?php
/**
 * User: S. Tudent
 * Date: Date
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
            <?php
                echo 'Realiseren oefeningen template thema 3 en 4 .';
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Uitwerking van PHP-oefeningen</h1>
        </header>
        <div class="contentContainer">
            <!-- Hoofdmenu (links) -->
            <nav>
                <h2>Thema 3</h2>
                <ul>
                    <li>Hoofdstuk 2</li>
                    <ul>
                        <li><a href="/T3_REA_Oefeningen/hoofdstuk2/T3_REA_Oefening_2_1.php">Oefening 2.1</a></li>
                        <li><a href="/T3_REA_Oefeningen/hoofdstuk2/T3_REA_Oefening_2_2.php">Oefening 2.2</a></li>
                    </ul>
                    <li>Hoofdstuk 3</li>
                    <ul>
                        <li><a href="/T3_REA_Oefeningen/hoofdstuk2/T3_REA_Oefening_3_1.php">Oefening 3.1</a></li>
                        <li><a href="/T3_REA_Oefeningen/hoofdstuk2/T3_REA_Oefening_3_2.php">Oefening 3.2</a></li>
                    </ul>
                    <li>Hoofdstuk 4</li>
                    <ul>

                    </ul>
                </ul>
            </nav>

            <!-- Uitwerking (rechts) --->
            <main id="wrapper">
                <h2>
                    Uitwerking.
                </h2>
                <p>
                    <?php
                        // Hier plaats je de PHP code van deze oefening.
                        echo("Op deze plek komt de uitwerking van je oefening te staan.");
                    ?>
                </p>
            </main>
        </div>
    </body>
</html>

