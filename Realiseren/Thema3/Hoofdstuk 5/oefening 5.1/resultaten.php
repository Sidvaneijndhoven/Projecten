<?php
/**
 * User: sid van eijndhoven
 * Date: 11-3-2024
 * File: T3_REA_Oefening 5.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/styles.css" rel="stylesheet">
</head>
<body>

<!--Hier onder staan alle uitkomsten die je krijgt doormiddel van $_get daardoor kan je met het ingevulde dingen berkenen of laten zien-->
<?php
    echo "<h1> Uitschrijfformulier kw1c</h1>";
?>
<?php

$input = $_GET["antwoord1"];

echo "<br><h3> Uw naam is:</h3> " . $input . "<br>";
?>

<?php
$input = $_GET["antwoord2"];

echo "<br><h3>Uw studentennummer is:</h3> " . $input . "<br>";
?>

<?php

$input = $_GET["antwoord3"];

echo "<br><h3>Datum van uitschrijving is:</h3>" . $input . "<br>";
?>

<?php

$input = $_GET["antwoord4"];

echo "<br><h3>Reden van uitschrijving is: </h3>" . $input . "<br>";
?>

<?php

$input = $_GET["antwoord5"];

echo "<br><h3>Uw leerjaar is: </h3>" . $input . "<br>";
?>

<?php

$input = $_GET["antwoord6"];

echo "<br><h3>Status van aamelding:</h3>" . $input . "<br>";
?>

<?php

$input = $_GET["antwoord7"];

echo "<br><h3>Uw reden voor uitschrijving is:</h3> " . $input . "<br>";
?>
