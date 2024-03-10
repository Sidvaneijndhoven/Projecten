<?php
// User: sid van eijndhoven
// Date: 20-2-2024
// File: Resultaten.php
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
    <link href="../Styles/Resultaten.css" rel="stylesheet">
</head>
<body>
     <img id="logo" src="../Images/logo_1.png">
        <h1>
            Dit is uw resultaat:
        </h1>
<!--     berekent het aantal punnten-->
    <?php

        $totaalpunten = 0;

        for($i=1;$i<10;$i++)
        {
            $totaalpunten += $_GET["vraag$i"];
        }
        ?>
<!--        switch met een postief resultaat en een negatief resultaat en een default als je niks invoert die laat zien of je een gezond gebit hebt of niet-->
        <?php
            echo "<p>U heeft in totaal: " . $totaalpunten . " punten.</p>";

            switch($totaalpunten){
                case ($totaalpunten > 60):
                    echo "<p> U heeft een gezond gebit! Ga zo door!</p>";
                    echo "<img id='duim' src='../Images/thumbsup.jpg' />";
                    break;
                case($totaalpunten <= 60):
                    echo " <p>U heeft een minder gezond gebit!</p><br>";
                    echo " <p>Een paar tips voor u is flos elke keer na het poetsen en maak extra afspraken om het gebit goed bij te houden.</p><br>";
                    echo "<img id='flossen' src='../Images/flossen.png' width='400' height='400'>";
                    echo "<img id='afspraakmaken' src='../Images/afspraak%20maken.jpg' width='400' height='400'>";
                    break;
                default:
                    echo " geen punten bekend ";
                    break;
            }
    ?>
        </main>
    </body>
</html>


