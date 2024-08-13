<?php

include("../Includes/db-functions.php");

startConnection();

//$query = "DELETE FROM Activity WHERE ActivityID = 23";

if(empty($_GET["Id"]) == true)
{
    echo "<p>Er is geen evenememt ID ingevoerd. Ga terug en probeer opnieuw</p>";
    echo "<br>";
    echo "<a href='../index.php'>Ga terug</a>";

    // Stop het script
    die();
}

$personId = $_GET["Id"];
$query = "DELETE FROM Activity WHERE ActivityID = ". $personId;

// Uitvoeren DELETE query
$rowsAffected = executeInsertQuery($query);

// Melding tonen
if($rowsAffected > 0)
{
    echo "<p>Succes! Verwijderen geslaagd.</p>";
    echo "<a href='../index.php'>Ga terug</a>";
}
else
{
    echo "<p>Mislukt! Verwijderen mislukt.</p>";
    echo "<a href='../index.php'>Ga terug</a>";
}