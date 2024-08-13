<?php
//user: Sid van Eijndhoven
//date: 29-5-2024
//file: update
include "../Includes/db-functions.php";
startConnection()
?>
<!DOCTYPE html>
<html lang="nl">
<title>
    Evenementen vereneging
</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Styles/stylesheet.css" rel="stylesheet">
</head>
<main>
    <body>
    <div id="top">
        <img id="logo" src="../Images/logo%20thema%204%20project.png">
    </div>
    <?php
        $query = "SELECT * FROM Activity WHERE id=" . $_GET["ActivityID"];
        $result = executeQuery($query);
        $record = $result->fetch(PDO::FETCH_ASSOC);
    ?>
    <label for="txtRiddleText">Evenement Bewerken</label>
    <input required type="text" name="txtRiddleText" value="<?php echo $record["ActivityID"]?>">
    <input type="hidden" name="Id" value="<?php echo $record["ActivityID"]; ?>


    <?php
    if(
        empty($_GET["Name"]) == false &&
        empty($_GET["Start"]) == false &&
        empty($_GET["End"]) == false &&
        empty($_GET["Location"]) == false &&
        empty($_GET["ActivityID"]) == false
    )
    {
        // Alle GET parameters zijn gevuld
        // Voer nu de UPDATE query uit
        $updateQuery= "UPDATE Activity SET
        Name = '". $_GET["Name"] . "' ,
        Start = '". $_GET["Start"] . "' ,
        End = '". $_GET["End"] . "' ,
        Location = '". $_GET["Location"] . "' ,
        WHERE ActivityID = ". $_GET["ActivityID"] . "
    ";

        echo $updateQuery;

        $rowsAffected = executeInsertQuery($updateQuery);

        if($rowsAffected > 0)
        {
            echo "<br><br>";
            echo "Geslaagd!";
            echo "Klik <a href='index.php'>hier</a> om terug te gaan.";
        }
        else
        {
            echo "Mislukt. Controleer je gegevens.";
        }
    }
    else
    {
        // Foutmelding. Niet de hele FORM is ingevuld.
        echo "Error: U heeft niet het volledige formulier ingevuld.";

    }
    ?>

