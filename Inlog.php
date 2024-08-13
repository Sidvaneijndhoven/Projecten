<?php
//User: Sid van Eijndhoven
//Date: 7-5-2024
//File: Inlog.php
// session start start de sessie
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
    <title>
        <?php
        echo 'Dierentehuis';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Styles/Stylesheet.css" rel="stylesheet">
        <link rel="icon" href="../Images/logo%20url.png" type="image/icon type">
    <script src="../Scripts/Javascript.js" rel="java"></script>
    </head>
    <body>
        <main>
            <div id="top">
                <p id="nood">
                    Dier in nood? Bel direct Dierenambulance Den Bosch <span id="nummer">073-6146070</span>
                </p>
                <img id="logo" src="../Images/Schermafbeelding%202024-05-14%20094514.png">
                <button id="donate">
                    <a href="#">Doneer</a>
                </button>
            </div>
            <?php
            // variables die uit de nav komen en zo gemakkelijk kan worden gebruikt
            $indexNav = "../";
                $vragNav = "";
                $inlog = "";
                include "../Includes/nav.php";
            ?>
            <!--form waar je inlognaam, wachtwoord en gebruiker moet invullen en dat wordt-->
            <!-- Uiteindelijk verstuurd naar result.php met de method get-->
            <form action='../Includes/Result.php' method='post'>
                <div>
                <img id="logo2" src="../Images/Schermafbeelding%202024-05-14%20094514.png">
                </div>
                <label for='txtRiddleText'><p id="weg">Inlognaam:</p></label>
                <label>
                    <input type='text' name='gegevens'>
                </label>
                <br><br>
                <label  for='txtCreator'><p id="weg">Wachtwoord:</p></label>
                <label>
                    <input type='password' name='gegevens2'>
                </label>
                <br><br>
                <label for="gebruiker"><p id="weg">Welke gebruiker bent u 1,2,3,4 of 5?</p>
                    <input type='text' name='gebruiker'>
                </label>
                <br><br>
                <input id="send" type='submit' value='Versturen'>
            </form>
            </form>
            <footer>
                <?php
                    include "../Includes/footer.php";
                ?>
            </footer>
        </main>
    </body>
</html>

