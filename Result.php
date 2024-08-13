<?php
//User: Sid van Eijndhoven
//Date: 7-5-2024
//File: result.php
// start de sessie
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
<main>
    <head>
        <title>
            <?php
            echo 'Dierentehuis';
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../Styles/Stylesheet.css" rel="stylesheet">
        <script src="../Scripts/Javascript.js" rel="java"></script>
        <link rel="icon" href="../Images/logo%20url.png" type="image/icon type">
    </head>
    <body>
        <main>
        <div id="top">
            <p id="nood">
                let op! Deze pagina is alleen voor medewerks van <span id="nummer">Dierentehuis Den Bosch</span>
            </p>
            <img id="logo" src="../Images/Schermafbeelding%202024-05-14%20094514.png">
            <button id="donate">
                <a href="#">Doneer</a>
            </button>
        </div>
    <?php
    // include de nav en de variable zodat het makkelijk kan worden veranderd
        $indexNav = "../";
        $vragNav = "../Pages/";
        $inlog = "../Pages/";
        include "nav.php";
    ?>
<!-- Als je hier op klikt dan gaat hij door de $indexNav terug naar de index pagina-->
        <button id="logout">
            <a href="<?php echo $indexNav ;?>index.php">Uitloggen/terug</a>

        </button>
        <h3>
            Overzicht vrijwilligers Dierentehuis Den Bosch:
        </h3>
    <?php
//    er wordt een variable gebruiker aangemaakt en die krijgt de waarde door het formulier van
//    de inlog als $gebruiker Gebruiker 1 is echot die welkom gebruiker 1 enz...
    $gebruiker = $_POST["gebruiker"];
    if($gebruiker == "Gebruiker 1")
    {
        echo "<p id='welkom'> Welkom gebruiker 1</p>";
    }

    elseif($gebruiker == "Gebruiker 2")
    {
        echo "<p id='welkom'> Welkom gebruiker 2</p>";
    }

    elseif($gebruiker == "Gebruiker 3")
    {
        echo "<p id='welkom'> Welkom gebruiker 3</p>";
    }

    elseif($gebruiker == "Gebruiker 4")
    {
        echo "<p id='welkom'> Welkom gebruiker 4</p>";
    }

    elseif($gebruiker == "Gebruiker 5")
    {
        echo "<p id='welkom'>Welkom gebruiker 5</p>";
    }

    else
    {
        echo "<p id='welkom'>U moet wel een gebruiker invullen!</p>";
    }
// variable $inlognaam en $wachtwoord krijgt zijn waarde door het formulier van inlog.php door de method post
    $inlognaam = $_POST["gegevens"];
    $wachtwoord = $_POST["gegevens2"];

    // als het wachtwoord en inlognaam hiermee overeenkomt wordt onderstaande tabel laten zien
        if($inlognaam == "vrijwilliger" && $wachtwoord == "I3d3rd13rt3lt")
        {
            echo "
        <table border='1'>
          <tr>
            <th>Naam</th>
            <th>Telefoonnummer</th>
            <th>E-mailadres</th>
            <th>Werkzaamheden</th>
          </tr>
          <tr>
            <td>Eliene Holla</td>
            <td>06-44662246</td>
            <td>ElieneHolla@outlook.com</td>
            <td>verzorging honden</td>
          </tr>
          <tr>
            <td>Philip Boekholt</td>
            <td>06-82528319</td>
            <td>PhilipBoekholt@outlook.com</td>
            <td>verzorging katten</td>
          </tr>
          <tr>
            <td>Selami Meulenbroeks</td>
            <td>06-56109212</td>
            <td>SelamiMeulenbroeks@gmail.com</td>
            <td>verzorging honden</td>
          </tr>
          <tr>
            <td>Semira Trines</td>
            <td>06-89084537</td>
            <td>SemiraTrines@yahoo.com</td>
            <td>verzorging katten, gastgezin kat</td>
          </tr>
          <tr>
            <td>Christian Kroos</td>
            <td>06-28868799</td>
            <td>ChristianKroos@hotmail.nl</td>
            <td>gastgezin kat</td>
          </tr>
          <tr>
            <td>Doede Smeulders</td>
            <td>06-86217996</td>
            <td>DoedeSmeulders@gmail.com</td>
            <td>verzorging honden, gastgezin hond</td>
          </tr>
          <tr>
            <td>Siebren Breukers</td>
            <td>06-94192111</td>
            <td>SiebrenBreukers@yahoo.com</td>
            <td>gastgezin hond</td>
          </tr>
          <tr>
            <td>Jouke Walhout</td>
            <td>06-93561432</td>
            <td>JoukeWalhout@gmail.com</td>
            <td>verzorging katten</td>
          </tr>
          <tr>
            <td>Hossein Waterman</td>
            <td>06-44303878</td>
            <td>HosseinWaterman@outlook.com</td>
            <td>gastgezin kat</td>
          </tr>
          <tr>
            <td>Lilia van Antwerpen</td>
            <td>06-99685607</td>
            <td>LiliavanAntwerpen@hotmail.nl</td>
            <td>verzorging honden, verzorging katten</td>
          </tr>
          <tr>
            <td>Allal Poelsma</td>
            <td>06-38560634</td>
            <td>AllalPoelsma@ziggo.nl</td>
            <td>gastgezin hond</td>
          </tr>
          <tr>
            <td>Bouke Haalboom</td>
            <td>06-87883016</td>
            <td>BoukeHaalboom@yahoo.com</td>
            <td>gastgezin kat</td>
          </tr>
          <tr>
            <td>Dio Bramer</td>
            <td>06-79615938</td>
            <td>DioBramer@ziggo.nl</td>
            <td>verzorging katten, gastgezin kat</td>
          </tr>
          <tr>
            <td>Linda Butter</td>
            <td>06-28317272</td>
            <td>LindaButter@ziggo.nl</td>
            <td>gastgezin hond</td>
          </tr>
          <tr>
            <td>Jorian de Bot</td>
            <td>06-88546197</td>
            <td>JoriandeBot@ziggo.nl</td>
            <td>verzorging honden, gastgezin hond</td>
          </tr>
        </table>";

            // alle personen in een array met een img
            $personen = array( "Personeel:",
                "Eliene Holla <br> <img id='fotos' src='../Images/foto%20man%202.jpg'>",
                "Philip Boekholt <br> <img id='fotos' src='../Images/foto%20man%203.jpg'",
                "Selami Meulenbroeks <br> <img id='fotos' src='../Images/foto%20man%204.jpg'",
                "Semira Trines <br> <img id='fotos' src='../Images/foto%20man%2014.jpg'",
                "Christian Kroos <br> <img id='fotos' src='../Images/foto%20vrouw%207.jpg'",
                "Doede Smeulders <br> <img id='fotos' src='../Images/foto%20vrouw%2010.jpg'",
                "Siebren Breukers <br> <img id='fotos' src='../Images/foto%20vrouw%2013.jpg'",
                "Jouke Walhout <br> <img id='fotos' src='../Images/foto%20man%2016.jpg'",
                "Hossein Waterman <br> <img id='fotos' src='../Images/foto%20vrouw%2014.jpg'",
                "Lilia van Antwerpen <br> <img id='fotos' src='../Images/foto%20vrouw%2015.jpg'",
                "Allal Poelsma <br> <img id='fotos' src='../Images/foto%20man%2017.jpg'",
                "Bouke Haalboom <br> <img id='fotos' src='../Images/foto%20man%2018.jpg'",
                "Dio Bramer <br> <img id='fotos' src='../Images/foto%20man%2019.png'",
                "Linda Butter <br> <img id='fotos' src='../Images/foto%20man%2020.png'",
                "Jorian de Bot <br> <img id='fotos' src='../Images/foto%20vrouw%2016.png'"
            );

            // loop die ervoor zorg dat alle personen in de array in een tabel komen onder elkaar
            for ($i = 0; $i < 1; $i++) {
                echo "<table id='personeel' border='1'>";
                foreach ($personen as $persoon)
                    echo "<tr><td>$persoon</td></tr>";
            }
            echo "</table>";

            // inlognaam die je welkomt en je zo ziet dat je bent ingelogd
            echo "<footer> <p> Welkom $inlognaam u bent ingelogd</p></footer>";
        }

        else
        {
            echo "<p>Ziet u dit niet? Check of uw wachtwoord of inlognaam klopt!</p>";
            echo "<p id='extra'> Wachtwoord of inlognaam onjuist</p>";
        }
    //checkt of de variable $inlognaam echt vrijwilliger is als dat zo is bent u succesvol ingelogd
    // met de $_SESSION krijgt de session een waarde

    function CheckLogin($inlognaam, $wachtwoord)
    {
        if ($inlognaam == "vrijwilliger"  && $wachtwoord == "I3d3rd13rt3lt")
        {

            $_SESSION["logged_in"] = true;
            echo "<footer><p>U bent succesvol ingelogd!</p></footer>";
            sleep(2);
        }

        else
            {
            echo "<footer><p>U bent niet succesvol ingelogd check het wachtwoord en de inlognaam goed!</p></footer>";
        }
    }

        $footer = "";
        if($_SESSION['logged_in'] = true)
        {
            $footer = "<footer><p>U bent ingelogd</p></footer>";
        }

        else
        {
            $footer = "<footer><p>U bent uitgelogd</p></footer>";
        }
    ?>
<!-- include de footer-->
            <footer>
                <?php
                include "footer.php";
                echo $footer;
                ?>
            </footer>
</body>
</main>
</html>











