<?php
//User: Sid van Eijndhoven
//Date: 7-5-2024
//File: Index.php
//start de sessie
session_start();
?>
<!DOCTYPE html>
<html lang="nl">
    <title>
        <?php
        echo 'Dierentehuis';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Styles/Stylesheet.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="icon" href="Images/logo%20url.png" type="image/icon type">
    <script src="Scripts/Javascript.js" defer></script>
</head>
    <body>
        <main>
            <div id="top">
                <p id="nood">
                    Dier in nood? Bel direct Dierenambulance Den Bosch <span id="nummer">073-6146070</span>
                </p>
            <img id="logo" src="Images/Schermafbeelding%202024-05-14%20094514.png">
                <button id="donate" onclick="vraag()">
                    <a href="#">Doneer</a>
                </button>
            </div>
            <?php
            // variables die uit de nav komen en zo gemakkelijk kan worden gebruikt
                $indexNav ="";
                $vragNav ="Pages/";
                $inlog = "Pages/";
                include "./Includes/nav.php";
            ?>
            <ficture>
                <img id="midden" src="Images/20240418_234548_0000.png">
            </ficture>
            <div id="positie">
                <div id="knoppen">
                    <button>
                        <div>
                        <img id="kat" src="Images/w1200.png">
                        </div>
                        <a href="#">kat adopteren</a>
                    </button>
                    <button>
                        <div>
                            <img id="hond" src="Images/R.png">
                        </div>
                        <a href="#">Hond adopteren</a>
                    </button>
                    <button>
                        <div>
                            <img id="dier" src="Images/image_processing20210621-16386-4aam6v.png">
                        </div>
                        <a href="#">Dier gevonden</a>
                    </button>
                    <button>
                        <div>
                            <img id="doneren" src="Images/handshake-icon.png">
                        </div>
                        <a href="#">Doneren</a>
                    </button>
                    <button>
                        <div>
                            <img id="afstaan" src="Images/R%20(1).png">
                        </div>
                        <a href="#">Afstaan huisdier</a>
                    </button>
                    <button>
                        <div>
                            <img id="vrijwilliger" src="Images/R%20(2).png">
                        </div>
                        <a href="#">vrijwilliger</a>
                    </button>
                </div>
            </div>
        </main>
    <footer>
        <?php
            include "Includes/footer.php";
        ?>
    </footer>
    </body>
</html>

