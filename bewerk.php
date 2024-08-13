<?php
// user: Sid van Eijndhoven
// date: 30-5-2024
// file: bewerk.php
include "../Includes/db-functions.php";
startConnection();
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
    <div id="top">
        <img id="logo" src="../Images/logo%20thema%204%20project.png">
    </div>
    <?php
    // include de nav en de variable zodat het makkelijk kan worden veranderd
    $indexNav = "../";
    $vragNav = "../Pages/";
    $bewerk = "../Pages/";
    include "../Includes/nav.php";
?>
    <form action="../Includes/insert.php" method="get">
        <input required type="text" name="txtRiddleText">
        <input required type="text" name="txtRiddleAnswer">
        <input required type="datetime-local" name="dtCreateDate">
        <input required type="text" name="txtCreator">
        <input type="submit" value="Opslaan">
    </form>

    <?php
    $query1 = "SELECT TOP (1000) [Name]
          ,[Start]
          ,[End]
          ,[Location]
          ,[ActivityID]
      FROM [Evenementen].[dbo].[Activity]";
    $result1 = executeQuery($query1);

    while ($row1 = $result1->fetch(PDO::FETCH_ASSOC)) {
        echo "<div id='evenement'>" . $row1["Name"] . " <p> Start:</p> " . $row1["Start"] . "<p>Einde:</p>" . $row1["End"] . "<p>Locatie:</p>" . $row1["Location"] . "<p>Activiteit:</p>" . $row1["ActivityID"];
        echo "<tr>";
        echo "  <td><a href='Update.php?raadselId=" . $row1["ActivityID"] . "'>Bewerk</a>";
        echo "  <td>" . $row1["ActivityID"] . "</td>" . "</div>";
    }
    ?>
    <?php
    $query = "SELECT * FROM Activity";

    // Voer de query uit
    $result = executeQuery($query);

        // Tonen van de database gegevens
        while ($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            echo "<div id='evenement2'>";
        echo "<tr>";
                echo "  <td>". $row["Name"] . "</td>" . "<br>";
            echo "  <td>". $row["Start"] . "</td>" . "<br>";
            echo "  <td>". $row["End"] . "</td>" . "<br>";
            echo "  <td>". $row["Location"] . "</td>" . "<br>";
            echo "  <td> <a href='../Pages/delete.php?Id=". $row["ActivityID"] ."'>Verwijderen</a> </td>";
            echo "</tr>";
            echo "</div>";
        }
        echo "</table>";


    ?>
    <footer>
        <?php
        $currentDateTime = date('Y-m-d H:i:s');
        echo "Het is nu: " . $currentDateTime . "<br>";
        include "../Includes/footer.php";
            ?>
    </footer>
</main>
    </body>
</main>
</html>