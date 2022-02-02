<?php
    // Declareren en initialiseren (vullen) van enkele variabelen:
    $date = date("d-m-Y");
    $time = date("H:i:s");
    $message = "Welkom Student";
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>
            <?php
                echo 'Realiseren Thema 3 en 4.';
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/style.css" rel="stylesheet">
        <style>
            /* Zoals je weet, is deze vorm van inline styling verboden ;) */
            html,
            body {
                margin: 0;
                padding: 0;
                height: 100vh;
                width: 100vw;
                position: absolute;
            }

            header
            {
                background-color: aliceblue;
                text-align: center;
                height: 15%;
                padding-top: 15px;
                position: relative;
            }

            main
            {
                background-color: beige;
                height: 10%;
                padding: 15px;
                position: relative;
            }
        </style>
    </head>
    <body>
    <header>
        <h1>
            <?php
                echo $message;
            ?>
        </h1>
    </header>
        <?php
            //Hier gaan we in het volgende hoofdstuk het menu toevoegen.
        ?>
    <main id="wrapper">
        <?php
            echo "<p>Het is nu $time op datum $date. <br> Succes en veel plezier met de komende lessen!</p>";
        ?>
    </main>
    </body>
</html>
