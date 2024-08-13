<?php
//user: SidvanEijndhoven, HarrisvanWeert en Justinvanravenstein
//date: 21-3-2024
//file: vragen.php

//nav
$indexnav = "../";
$vragnav = "";

$cookie_name ="naam1";
$cookie_value = ""
?>
<html lang="nl">
<head>
    <title>
        <?php
        echo "Autoscout 24"
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    er wordt een styles sheet toegevoegt-->
    <link rel="stylesheet" href="../styles/vragenlijst.css">
    <!--    er wordt een java script toegevoegd-->
    <script src="../scripts/java.js" defer ></script>
    <link rel="icon" href="../Images/logo.png" type="image/icon type">
</head>
<body>
<!-- wordt een foto toegevoegd.-->
<img id="logo" src="../Images/logo.png">
<?php
include "../Includes/nav.php";
//  de default tijd wordt gezet op europe/amersterdam gezet.
date_default_timezone_set('Europe/Amsterdam'); // Stelt de juiste tijdzone in

// wordt een variable toegevoegd
$uur = date('G');

// als het uur groter is dan 6 en kleinere is dan 12 wordt er goedemorgen gezegd.
if ($uur >= 6 && $uur < 12)
{
    $begroeting = '<p id="koptekst" Goedemorgen</p><br>';
//    als het uur groter is dan 12 en kleiner is dan 18 wordt er goedemiddag gezegd.
}
elseif ($uur >= 12 && $uur < 18)
{
    $begroeting = '<p id="koptekst" Goedemiddag</p><br>';
//    wordt goedemiddag gezegd
}
else
{

    $begroeting = '<p id="koptekst" Goedenavond</p><br>';
}

//echot de tijd en datum
echo $begroeting;
// laat het de datum, uur, minuten en secondes zien
$datum_en_tijd = date("Y-m-d H:i:s");
echo "<p id='koptekst'De huidige datum en tijd is: </p>" . $datum_en_tijd;
?>
<!-- word een h1 aangemaakt -->
<h1 id="koptekst">
</h1>
<!--wordt een h1 aagemaakt-->
<h1 id="welkom">
    Welkom bij onze vragenlijst na compleet invullen van de vragenlijst krijgt u een advies over wat voor auto bij u past.
</h1>
<!-- wordt een h2 gemaakt-->
<h2 id="welkom">
    Vragenlijst:
</h2>
<div id="big1">
    <!--    als vragenlijst hebt gemaakt dan ga je de resultaten pagina toe.-->
    <form action="resultaat.php" method="post">
        <div id="div1">
            <h3>
                | Wat is uw budget: |
            </h3>
            <!--        Vraag 1-->
            <!--        er wordt een input in gemaakt met radio button-->
            <input type="radio" name="vraag1" value="10">
            <label> Onder de 10k</label><br>

            <input type="radio" name="vraag1" value="50"
            <label> 10-50k</label><br>

            <input type="radio" name="vraag1" value="100">
            <label>50-100k</label><br>

            <input type="radio" name="vraag1" value="200">
            <label>100k+</label><br>
        </div>
        <div id="div2">
            <h3>
                |  Wat voor soort auto zoekt u: |
            </h3>
            <!--         er wordt een input in gemaakt met radio button  vraag 2-->
            <input type="radio" name="vraag2" value="1000"
            <label>  Suv</label><br>

            <input type="radio" name="vraag2" value="2000"
            <label> Sedan</label><br>

            <input type="radio" name="vraag2" value="3000"
            <label> Station wagon</label><br>

            <input type="radio" name="vraag2" value="4000">
            <label> Verschillende</label><br>
        </div>
        <div id="div3">
            <h3>
                | Hoeveel kilometer mag er op de teller staan? |
            </h3>
            <!--       er wordt een input in gemaakt met radio button       vraag 3-->
            <input type="radio" name="vraag3" value="1"
            <label>< 50.000km </label><br>

            <input type="radio" name="vraag3" value="2"
            <label>> 50.000 – 100.000km </label><br>

            <input type="radio" name="vraag3" value="3"
            <label> > 100.000 – 150.000km</label><br>

            <input type="radio" name="vraag3" value="4"
            <label> > 150.000km </label><br>
        </div>
        <div id="div4">
            <h3>
                | Op wat voor soort brandstof moet de auto rijden: |
            </h3>
            <!--      er wordt een input in gemaakt met radio button        vraag 4-->
            <input type="radio" name="vraag4" value="1"
            <label>Benzine</label><br>

            <input type="radio" name="vraag4" value="2"
            <label>Diesel</label><br>

            <input type="radio" name="vraag4" value="3"
            <label>Elektrish</label><br>

            <input type="radio" name="vraag4" value="4"
            <label>Hybride</label><br>
        </div>
        <div id="div5">
            <h3>
                | Hoeveel personen moeten er in de autokomen: |
            </h3>
            <!--       er wordt een input in gemaakt met radio button       vraag 5-->
            <input type="radio" name="vraag5" value="1"
            <label>2</label><br>

            <input type="radio" name="vraag5" value="2"
            <label>4</label><br>

            <input type="radio" name="vraag5" value="3"
            <label>5</label><br>

            <input type="radio" name="vraag5" value="4"
            <label>7</label><br>
        </div>
        <div id="div6">
            <h3>
                | Wat voor soort kleur auto wilt u? |
            </h3>
            <!--     er wordt een input in gemaakt met radio button         vraag 6-->
            <input type="radio" name="vraag6" value="1"
            <label>Rood</label><br>

            <input type="radio" name="vraag6" value="2"
            <label>Zwart</label><br>

            <input type="radio" name="vraag6" value="3"
            <label>Grijs</label><br>

            <input type="radio" name="vraag6" value="4"
            <label>Maakt niet uit</label><br>
        </div>
        <div id="div7">
            <h3>
                | Wat voor soort merk zat u te denken? |
            </h3>
            <!--     er wordt een input in gemaakt met radio button         vraag 7-->
            <input type="radio" name="vraag7" value="1"
            <label>Mercedes</label><br>

            <input type="radio" name="vraag7" value="2"
            <label>Audi</label><br>

            <input type="radio" name="vraag7" value="3"
            <label>Toyota</label><br>

            <input type="radio" name="vraag7" value="4"
            <label>Maakt niet uit</label><br>
        </div>
        <div id="div8">
            <h3>
                | Hoe hard moet de auto kunnen gaan? |
            </h3>
            <!--  er wordt een input in gemaakt met radio button            vraag 8-->
            <input type="radio" name="vraag8" value="1"
            <label>130</label><br>

            <input type="radio" name="vraag8" value="2"
            <label>Minimaal 180</label><br>

            <input type="radio" name="vraag8" value="3"
            <label>Minimaal 250</label><br>

            <input type="radio" name="vraag8" value="4"
            <label>250+</label><br>
        </div>
        <div id="div9">
            <h3>
                | Bouwjaar van de auto: |
            </h3>
            <!--  er wordt een input in gemaakt met radio button            vraag 9-->
            <input type="radio" name="vraag9" value="1"
            <label> 2000-2010</label><br>

            <input type="radio" name="vraag9" value="2"
            <label>2010-2015 </label><br>

            <input type="radio" name="vraag9" value="3"
            <label> 2015-2020</label><br>

            <input type="radio" name="vraag9" value="4"
            <label>2020+ </label><br>
        </div>
        <div id="div10">
            <h3>
                |  Type auto: |
            </h3>
            <!--  er wordt een input in gemaakt met radio button            vraag 10-->
            <input type="radio" name="vraag10" value="250"
            <label> Luxe</label><br>

            <input type="radio" name="vraag10" value="500"
            <label>Sport</label><br>

            <input type="radio" name="vraag10" value="750"
            <label> Praktisch</label><br>

            <input type="radio" name="vraag10" value="800"
            <label> Zuinig</label><br>
        </div>
        <div id="div11">
            <h3>
                | Type motor: |
            </h3>
            <!--  er wordt een input in gemaakt met radio button            vraag 11-->
            <input type="radio" name="vraag11" value="1"
            <label> v6 </label><br>

            <input type="radio" name="vraag11" value="2"
            <label>v8</label><br>
            <input type="radio" name="vraag11" value="3"
            <label>v10 </label><br>
            <input type="radio" name="vraag11" value="4"
            <label> maakt niet uit</label><br>
        </div>
        <div id="div12">
            <h3>
                |  Functies: |
            </h3>
            <!--  er wordt een input in gemaakt met radio button            vraag 12-->
            <input type="radio" name="vraag12" value="1"
            <label> Opendak </label><br>
            <input type="radio" name="vraag12" value="2"
            <label>Carplay </label><br>
            <input type="radio" name="vraag12" value="3"
            <label>  Elektrishe ramen</label><br>
            <input type="radio" name="vraag12" value="4"
            <label> Verwarmde stoelen </label><br>
        </div>
        <!--  het versturen van de antwoorden  resultaat knop-->
        <p>
            <input type="submit" value="Bekijk wat voor soort auto bij u past" class="knop">
        </p>
        <?php
        // als de klant niet tevreden is dan kan hij hier op klikken hij linkt gewoon terug naar de vragen waardoor de vragenlijst reset
        ?>
        <button id="reset">
            <a id="tevreden" href="vragen.php">Niet tevreden met uw keuze? Reset de vragenlijst hier</a>
        </button>
    </form>
</div>
<?php
// footer met links die linken naar de officiele website
    include "../Includes/footer.php";
?>
</body>
</html>


