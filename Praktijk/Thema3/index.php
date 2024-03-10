<?php
/**
 * User: sid van eijndhoven
 * Date: 20-2-2024
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Tandarts praktijk Denbosch';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Styles/style.css" rel="stylesheet">
</head>

<body>
    <main>
     <img id='logo' src='Images/logo_1.png'>
<!--        navigatie menu die ik heb geinclude -->
        <?php
        $indexNav ="";
        $vragNav ="pages/";
        include "Includes/nav2.php";
        ?>
        <img id="smile" src="Images/574567011%20(1).jpg">
        <h1 id="tandarts">
            TANDARTS DEN BOSCH
        </h1>
        <h2>
            Uw tandarts in Den Bosch e.o. voor reguliere tandheelkunde en implantaten
        </h2>
        <h3>
            Betrouwbaar. Bereikbaar. Betaalbaar.
        </h3>
        <button id="inschrijven"><b>Inschrijven</b></button>
        <button id="afspraak"><b>Afspraak maken</b></button>
    </main>
    <footer>
    </footer>
</body>
</html>
