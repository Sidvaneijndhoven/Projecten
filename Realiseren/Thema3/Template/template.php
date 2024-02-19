<?php
/**
 * User: sid van eijndhoven
 * Date: 5-2-2024
 * File: T3_REA_Oefening 2.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
            <?php
                echo 'Realiseren instructies thema 3 en 4.';
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet">
    </head>


    <body>
        <header>
            <h1>
                <?php
                    echo 'Instructies';
                ?>
            </h1>
        </header>
        <?php
            //Hier gaan we in het volgende hoofdstuk het menu toevoegen.
        ?>
        <main id="wrapper">
            <nav>
                <h2>Hoofdmenu</h2>
                <h3>Hoofdstuk 1:</h3>
                <ul>
                    <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.1.php">Oefening 1.1</a></li>
                    <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.2.php">Oefening 1.2</a></li>
                </ul>
            </nav>
            <section>
                <h2>
                    Uitwerkingen.
                </h2>
                <?php
                echo "<p> Php is een opensource scriptaal die een website dinamisch maakt door informatie om te zetten
                van een database oftewel een server side script taal</p>"
                ?>
                <?php
                   echo "<h1> Git en Github</h1>"
                ?>
                <?php
                echo "<p> Doormiddel van een git kan je een opdracht clonen uit github en die gebruiken om de opdracht te maken.
                        Met een commit kan je wijzingen maken aan je lokale GIT repository. Met een push kan je wijzingen sturen naar de Github repository
                      </p>"
                ?>
                <!-- met echo kan je waardes naar de html sturen en kan je dus de text op de pagina zien. -->
                <!-- Plaats je code / uitwerking hieronder -->
                <p>
                    <?php
                        // Voorbeeldcode
                        echo "Hello World!";
                    ?>
                </p>
            </section>
        </main>
    </body>
</html>

