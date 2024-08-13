<?php

// Een "leeg" $pdo variabele aanmaken
$pdo = null;

// Starten van een DB connectie
function startConnection()
{
    global $pdo;
    // Open de database connectie en ODBC driver
    try {
        $pdo = new PDO("odbc:odbc4sqlserver");
    } catch (PDOException $e) {
        echo "<h1>Database error:</h1>";

        echo $e->getMessage();
        die();
    }
}
echo "database conectie gelukt";
function executeQuery($sql)
{
    global $pdo;
    // Uitvoeren van een SQl query
    try
    {
        // Query uitvoeren
        $result = $pdo->query($sql);

        return $result;
    }
    catch (PDOException $e)
    {
        echo 'Er is een probleem met ophalen van evenementen: ' . $e->getMessage();
        die();
    }
}

function executeInsertQuery($query)
{
    global $pdo;

    try
    {
        $rowsAffected = $pdo->exec($query);
    }
    catch(PDOException $error)
    {
        $rowsAffected = 0;
        echo "<p>Er is een error opgetreden: ". $error->getMessage() . "</p>";
    }

    return $rowsAffected;
}