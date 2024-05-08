<?php
//User: Sid van Eijndhoven
//Date: 7-5-2024
//File: oefening 1.1
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'oefening 1.1';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/stylesheet.css" rel="stylesheet">

<?php

// Open de database connectie en ODBC driver

//Databases uitlezen  hoofdstuk 1 pagina 18 van 19

echo "<h1> Uitwerking oefening 1.1: </h1>";
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    // Bij een error, toon dan deze melding
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();

    // Stop het script
    die();
}


echo "<h1>database connectie gelukt!</h1><br>";

// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = "SELECT * FROM tblRiddles";

    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    // Bij een error, toon dan deze melding
    echo "Er is een probleem met ophalen van tblRiddles: " . $e->getMessage();

    // Stop het scrip
    die();
}

// Door de results heen loopen via een while
echo "<table border='1'>";
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{

    echo "<tr>";
    echo "<th>ID: " . $row["Id"] . "</th>";
    echo "<th>Raadsel: " . $row["RiddleText"] . "</th>";
    echo "<th>Oplossing: " . $row["RiddleAnswer"] . "</th>";
    echo "<th>Bedenker:" . $row["Creator"] . "</th>";
    echo "<th>Datum: " . $row["CreateDate"] . "</th>";
    echo "</tr>";

}
echo "</table>";
?>
