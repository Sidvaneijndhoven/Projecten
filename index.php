<?php
//user: Sid van Eijndhoven
//date: 29-5-2024
//file: index.php
include "Includes/db-functions.php";
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
<link href="Styles/stylesheet.css" rel="stylesheet">
</head>
<main>
    <body>
    <div id="top">
        <img id="logo" src="Images/logo%20thema%204%20project.png">
    </div>
    <?php
    $indexNav ="";
    $vragNav ="Pages/";
    $bewerk = "Pages/";
        include "Includes/nav.php";
    ?>
    <h1>
        Welkom op de evenementen website
    </h1>
    <p>
        Hier vindt u alle informatie over komende evenementen u kunt op deze website<br>
        evenementen toevoegen bewerken en verwijderen.
    </p>

    <?php
    $query1 = "SELECT TOP (3) [Name]
      ,[Start]
      ,[End]
      ,[Location]
      ,[ActivityID]
  FROM [Evenementen].[dbo].[Activity]";
    $result1 = executeQuery($query1);

    ?>
    <p>
        3 nieuwste evenementen:
    </p>
            <?php   while ($row1 = $result1->fetch(PDO::FETCH_ASSOC))
            {
                echo "<div id='evenement'>" . $row1["Name"] . " <p> Start:</p> ".  $row1["Start"] . "<p>Einde:</p>" . $row1["End"] . "<p>Locatie:</p>" . $row1["Location"] .  "<p>Activiteit:</p>" . $row1["ActivityID"] .": </div>";
            }     ?>
    <?php
    include "Includes/footer.php";
    ?>
    </body>
</main>
</html>








</main>
</html>