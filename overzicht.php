<?php
//user: Sid van Eijndhoven
//date: 29-5-2024
//file: index.php
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
    $indexNav ="../";
    $vragNav ="";
    $bewerk = "";
    include "../Includes/nav.php";
    ?>
    <h1>
        Overzicht
    </h1>
    <p>
        Hier ziet u een overzicht van alle evenementen:
    </p>
    <?php

    $query1 = "SELECT TOP (1000) [Name]
          ,[Start]
          ,[End]
          ,[Location]
          ,[ActivityID]
      FROM [Evenementen].[dbo].[Activity]";
    $result1 = executeQuery($query1);

    while ($row1 = $result1->fetch(PDO::FETCH_ASSOC)) {
    echo "<div id='evenement'>" . $row1["Name"] . " <p> Start:</p> " . $row1["Start"] . "<p>Einde:</p>" . $row1["End"] . "<p>Locatie:</p>" . $row1["Location"] . "<p>Activiteit:</p>" . $row1["ActivityID"] . ": </div>";
}


    ?>
<footer>
    <?php
    include "../Includes/footer.php";
    ?>
</footer>
    </body>
</main>
</html>
