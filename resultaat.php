<?php
 // User: sid van eijndhoven, Harris van Weert, Justin van Ravenstein
 //  Date: 19-3-2024
 // File: index.php
?>
    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <title>
            <?php
            echo 'Autoscout24';
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../styles/resultaten.css" rel="stylesheet">
        <script src="../scripts/java.js" rel="java" defer></script>
        <link rel="icon" href="../Images/logo.png" type="image/icon type">
    </head>
<body>
    <img id="logo" src="../Images/logo.png">
<?php
$indexnav = "../index.php";
$vragnav = "../Pages/vragen.php";
include "../Includes/nav.php";
?>
<h1 id="titel1">
    Resultaten pagina!
</h1>
<h1 id="koptekst">
</h1>
<?php
$datum_en_tijd = date("Y-m-d H:i:s");
echo "<p id='tijd'> De huidige datum en tijd is: </p>" . "<p id='tijd'>$datum_en_tijd</p>";

$vorigewaarde = 0;
if (isset($_COOKIE["result1"]))
{
    $vorigewaarde =$_COOKIE["result1"];
    echo "<h3 id='boven1'>De vorige keer had u ".$vorigewaarde." aantal punten</h3><br>";
}
else
{
    echo"<p id='koptekst'>Dit is de eerste keer dat uw dit formulier invult</p>";
}
//TESLA
if ($vorigewaarde >30000)
{
    echo " <p id='tijd'> De vorige keer was de Tesla Model 3 uit de test gekomen!</p>";
}
//SUVS
//ik gebruik && zodat de echo alleen word uitgevoerd als de 2 waardes kloppen
elseif($vorigewaarde>1000 && $vorigewaarde <1499)
{
    echo"<p id='tijd'>De vorige keer was de luxe Mercedes suv uit de test gekomen! </p>";
}
elseif($vorigewaarde>1500 && $vorigewaarde <1700)
{
    echo"<p id='tijd'>De vorige keer was de sportige Ferrari suv uit de test gekomen!</p>";
}
elseif($vorigewaarde>1750 && $vorigewaarde<2000)
{
    echo"<p id='tijd'>De vorige keer was de praktishe en zuinige Ford suv uit de test gekomen!</p>";
}
//SEDANS
elseif($vorigewaarde>2000 &&$vorigewaarde<2699)
{
    echo"<p id='tijd'>De vorige keer was de sportige E63 AMG sedan uit de test gekomen!</p>";
}
elseif($vorigewaarde>2000 &&$vorigewaarde<2400)
{
    echo"<p id='tijd'>De vorige keer was de luxe Bentley Flying Spur uit de test gekomen!</p>";
}
elseif($vorigewaarde>2699 &&$vorigewaarde<3000)
{
    echo"<p id='tijd'>De vorige keer was de praktishe en zuinige Volvo uit de test gekomen!</p>";
}
//STATION-WAGONS
elseif($vorigewaarde>3000 && $vorigewaarde<3450)
{
    echo"<p id='tijd'>De vorige keer was de sportige RS6 uit de test gekomen!</p>";
}
elseif($vorigewaarde>3500 && $vorigewaarde<3700)
{
    echo"<p id='tijd'>De vorige keer was de luxe Mercedes station wagon uit de test gekomen!</p>";
}
elseif($vorigewaarde>3700 && $vorigewaarde<4000)
{
    echo"<p id='tijd'>De vorige keer was de praktische en zuinige Volvo station uit de test gekomen!</p>";
}



echo "<div id='dv1'>";
//TEST 1 RESULTAAT GOEDKOPE AUTO
//ik gebruik een loop om de punten bij elkaar op te tellen
$totaalpunten = 0;
for($i=1;$i<13;$i++)
{
    $totaalpunten += $_POST["vraag$i"];
}

// hier geef ik de resultaat doormiddel van punten
//als de punten hoger zijn als 30000 wordt de tesla vertoond
if($totaalpunten > 30000)
{
    echo "<img src='../Images/tesla.jpeg'> </img";
    echo"U heeft gekozen voor een elektrische auto";
    echo"Als u niet blij bent met het resultaat probeer de vragenlijst opnieuw";
}
//KEUZES VOOR DE SUV
elseif($totaalpunten  > 1000 && $totaalpunten <1499) {
    echo "<p id='suvtje'>Deze suvs passen wel bij u:</p>";
    //hier gebruik een geneste if statement zodat er noog specefieker de auto wordt vertoond
    if ($totaalpunten > 1250 && $totaalpunten < 1499) {
        echo "<h1>Deze luxe Mercedes is wat voor u!</h1>";
        echo"<h2>Het is een luxe en sportige suv precies wat u wilde!</h2><br>";
        echo "<img src='../Images/mercedessuv.jpg'>";
        echo "<div id='rolls'>";
        echo "<h2>Maar misschien deze Rolls Royce ook!</h2>";
        echo"<h2>Dit is de ultieme luxe suv precies wat u wilde!</h2><br>";
        echo "<img src='../Images/rolls.jpg'>";
        echo "</div>";
    }
}
elseif($totaalpunten>1500 && $totaalpunten<1700)
{
    echo"<h1>Deze Ferrari past bij de opties die u wilde!</h1>";
    echo"<h2>Het is een sportige suv precies wat je wilde!<br></h2>";
    echo"<img src='../Images/ferrarisuv.jpg'>";
}
elseif ($totaalpunten>1750 && $totaalpunten<2000)
{
    echo"<h1>Deze suv past misschien bij u:</h1>";
    echo"<h2>het is een praktishe en zuinige suv precies wat je wilde!</h2><br> ";
    echo "<img src='../Images/fordecosport.jpg'>";
}
//KEUZES VOOR DE SEDANS
elseif($totaalpunten>2000 && $totaalpunten <2699)
{
    echo "<h1>Deze Sedan past misschien bij u!</h1> <br>";
    echo "<h2>Het is een sportige Sedan precies wat je wilde!</h2> <br>";
    echo"<img src='../Images/e63s.jpg'><br>";
}
elseif($totaalpunten>2000 && $totaalpunten<2400)
{
    echo "<h1>Deze Sedan past misschien bij u!</h1>";
    echo "<h2>het is een luxe Sedan precies wat je wilde!</h2><br>";
    echo "<img src='../Images/flyingspur.jpg'>";
}
elseif($totaalpunten > 2699 && $totaalpunten <3000)
{
    echo "<h1>Deze sedan past misschien bij u!</h1>";
    echo "<h2>Het is een praktische en zuinige auto precies wat je wilde!</h2><br>";
    echo "<img src='../Images/volvo.jpg'>";
}
//KEUZES VOOR DE STATION WAGONS
elseif($totaalpunten>3000 && $totaalpunten<3450)
{
    echo"<h1>Deze station wagon past misschien bij u! </h1>";
    echo"<h2>Het is een sportige station wagon precies wat je wilde!</h2><br>";
    echo"<img src='../Images/rs6.jpg'>";
}
elseif($totaalpunten >3500 && $totaalpunten <3700)
{
    echo"<h1>Deze station wagon past misschien bij u! </h1>";
    echo"<h2>Het is een luxe stationwagon precies wat je wilde!</h2><br>";
    echo"<img src='../Images/mercedesstation.jpg'>";
}
elseif($totaalpunten >3700 && $totaalpunten <4000)
{
    echo"<h1>Deze stationwagon past misschien bij u! </h1>";
    echo"<h2>Het is een praktishe en zuinige station wagon precies wat je wilde!</h2><br>";
    echo"<img src='../Images/volvo.jpg'>";
}

?>
<!--    Label waar je tekst kan invullen en checkboxes kan aanvinken-->
<label>vul hier je feedback in!</label>
<input type="text"><br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1"> Ik vond de vragenlijst goed gemaakt</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2"> Ik heb er geen mening over</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3"> Ik vond het een slechte vragenlijst</label><br>
<?php

echo "</div>";
// zet de cookie en geeft de cookie een waarde
$cookie_name = "result1";
$cookie_value ="$totaalpunten";

setcookie($cookie_name,$cookie_value,time()+(86400 *30),"/");

// include naar de footer
include "../Includes/footer.php";
?>
</body>
</html>
