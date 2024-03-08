<!DOCTYPE html>
<!--
    Author:     Sid van Eijndhoven
    Date:       8-3-2024

    Subject:    Bijlage oefening 4.4
-->
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>
            Frisdrankautomaat
        </title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width initial-scale=1" >
        <link rel="stylesheet" href="styles/stylesheet.css">
    </head>
    <body>
        <?php

            if(isset($_POST['drinks']))
            {
                $choice = $_POST['drinks'];
                $money = $_POST['money'];
                $change = ($money == 1.5);
                $change2 = ($money - 1.5);
//                $choice = array("cocacola", "fanta", "icetea", "cassis");
/*
                // -- Opdrachten -- //
                1. Maak een if/else statement die checkt of het wisselgeld 0 euro of meer is (m.a.w.: er is genoeg geld ingeworpen)
                2. Wanneer er genoeg geld ingeworpen is:
                    a. Maak een switch die de waarde uit variabele $choice haalt
                    b. Wanneer die waarde "cocacola" is, dan moet er de zin komen te staan:
                        'U heeft Coca Cola gekozen'
                    c. Daaronder komt dan de afbeelding van een blikje cola te staan met: width="400" height="400"
                    d. Daaronder komt dan een zin te staan met het wisselgeld.
                    e. Idem, maar dan voor de andere drie mogelijkheden. De waarden van $choice kunnen zijn:
                        cocacola  fanta  icetea  cassis
                3. Wanneer er NIET genoeg geld is ingevoerd krijgt de ontvanger geen tekst en zin zoals hierboven, maar:
                    a. Melding: 'U heeft niet genoeg geld ingeworpen'
                    b. 'U heeft ingeworpen: <<ingeworpen bedrag>>'. Uiteraard met een euroteken.
                    c. 'U komt nog <<geld dat tekort is>> tekort'. Uiteraard ook met een euroteken.

                // -- Advanced -- //
                4. Op regel 16 hierboven zie je dat &money wordt bepaald door wat er uit het form wordt gehaald. Probleem is: wanneer iemand niets invult, dan komt regel 25 in de problemen omdat je niet 1.5 van niets kunt aftrekken (je krijgt dan ook een Uncaught TypeError). OPDRACHT:
                    a. Zorg ervoor dat binnen één regel (die regel 24) er wordt gecheckt of $_POST['money'] leeg is (null). Is het leeg? Dan moet $money de waarde 0.0 krijgen. Let er op: je gebruikt dus ook maar één puntkomma op die regel! Zie ook: https://davidwalsh.name/php-ternary-examples
                5. In de if/else statement krijg je een geldbedrag te zien in beide gevallen: Het wisselgeld (if), OF het geld dat werd ingeworpen en hoeveel het tekort is (else). Zorg ervoor dat de bedragen mooi worden weergegeven: een komma in plaats van een punt en twee cijfers achter de komma. Zie ook: https://davidwalsh.name/php-ternary-examples
                6. Zijn deze zinnen te lang? Ga in PHP Storm naar: File > Settings > Editor > General, en kijk dan bij Soft Wrap. Zet daar bijv. de *.php-extensie bij en je zult zien dat de lange zinnen in PHP Storm mooi worden afgebroken.
*/

                // schrijf hier je code . . .
//                            als er meer dan 1.50 wordt ingegooid krijg je bedrag terug
                                if ($money > 1.5)
                                {
                                    echo "U krijgt €$change2 terug<br>";
                                }
//                                als er niet genoeg is ingeworpen dan krijg je dit te zien
                                else
                                {
                                    echo "U heeft niet genoeg geld ingeworpen<br> U heeft €$money ingeworpen<br> U komt nog €" .  (1.5 - $money) . " tekort<br>";
                                }
//                                switch die kijkt wat er is gekozen en daarmee in een echo laat zien wat en een img
                            switch ($choice)
                            {
                                case"cocacola";
                                    echo "U heeft coca cola gekozen<br>";
                                    echo "<img src='images/cola.png' width='400' height='400' >";
                                    break;

                                case"fanta";
                                    echo "U heeft fanta gekozen<br>";
                                    echo "<img src='images/fanta.jpg' width='400' height='400'>";
                                    break;

                                case"icetea";
                                    echo "U heeft icetea gekozen<br>";
                                    echo "<img src='images/icetea.jpeg' width='400' height='400'>";
                                    break;

                                case"cassis";
                                    echo "U heeft cassis gekozen<br>";
                                    echo "<img src='images/cassis.jpg' width='400' height='400'>";
                                    break;

                                default:
                                    echo "Dat is geen drankje?<br>";
                            }

                // tot hier
            }

            else

            {

        ?>

                    <form id="form" action="" method="POST">

                        <h1>
                            Frisdrankautomaat
                        </h1>
                            Druk op een knop voor de gewenste frisdrank. Elk drankje kost &euro; 1,50
                        <br/>

                        <button type="submit" value="cocacola" name="drinks">Coca Cola</button><br>
                        <button type="submit" value="fanta" name="drinks">Fanta</button><br/>
                        <button type="submit" value="icetea" name="drinks">Ice-Tea</button><br/>
                        <button type="submit" value="cassis" name="drinks">Cassis</button><br/>

                        <h3>
                            Werp hier uw contant geld in:
                        </h3>
                        <input type="double" name="money">
                    </form>

        <?php
            }           // else afsluiten
        ?>
    </body>
</html>