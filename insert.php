<?php
include "db-functions.php";
startConnection();

// Format de dtCreateDate naar een Amerikaans formaat (yyyy-mm-dd)
$formattedDate = date("Y-m-d h:i", strtotime($_GET["dtCreateDate"]));

$query = "INSERT INTO Activity VALUES ('". $_GET["txtRiddleText"] . "', '".
    $_GET["txtRiddleAnswer"] . "', '". $_GET["txtCreator"] . "', '". $formattedDate . "')";

echo $query;

$rowsAffected = executeInsertQuery($query);

if($rowsAffected > 0)
{
    echo "<p>De grap is opgeslagen in de database</p>";
}
else
{
    echo "<p>Er is iets fout gegaan. Probeer het opnieuw.</p>";
}
?>
