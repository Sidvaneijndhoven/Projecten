<?php
 //user: Sid van Eijndhoven
// date: 30-5-2024
// file: inlog.php

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
    $indexNav = "../";
    $vragNav = "";
    $bewerk = "";
    include "../Includes/nav.php";
    include("../Includes/db-functions.php");

    startConnection();

    if(isset($_POST['user_name']))
    {
        $sql = "SELECT *
        FROM [User]
        WHERE UserName = '" . $_POST['user_name'] . "'
        AND Password = '" . $_POST['pass_word'] . "';";

        $result = executeQuery($sql);

        if (sizeof($result->fetchAll()) > 0) {
            header("location: bewerk.php");
        } else {
            echo "<p>niet ingelogd</p>";
        }
    }
    ?>

    <form method="post" action="inlog.php">
        <img id="logo" src="../Images/logo%20thema%204%20project.png">
        gebruikers naam<br>
        <input required type="text" name="user_name"><br>
        Wachtwoord<br>
        <input required type="password" name="pass_word"><br>
        <input id="sturen" type="submit" value="Inloggen">
    </form>


    <?php
    include "../Includes/footer.php";
    ?>
    </body>
</main>
</html>