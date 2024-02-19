<?php
/**
 * User: Sid van Eijndhoven
 * Date: 19-2-2024
 * File: T3_REA_Oefening3.1php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Realiseren instructies thema 3 en 4.';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/3.1.css" rel="stylesheet">
</head>A
<body>
<header>
    <h1>
        <?php
        echo 'Oefeningen ';
        ?>
    </h1>
</header>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <nav>
        <h2>Hoofdmenu</h2>
        <h3>Hoofdstuk 2:</h3>
        <ul>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.1.php">Oefening 1.1</a></li>
            <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.2.php">Oefening 1.2</a></li>
        </ul>
    </nav>
    <section>
        <h2>
            Uitwerkingen oefening 3.1:
        </h2>

        <!-- Plaats je code / uitwerking hieronder -->
        <?php
            echo "<h1> taak 1</h1>";
        ?>
        <?php
            $word1 = "carnaval";
            $word2 = "zondag, maandag en dinsdag";
            $word3 = "40";
            $word4 = "Noord-Brabant";
            $word5 = "Worstenbrood, koffie en schrobbeler";
        ?>
        <?php
            $story = "<p>$word1 is van oorsprong een gekerstend heidens volksfeest. Het duurt 
            officieel 3 dagen, $word2 direct voorafgaand aan de 
            vastentijd van $word3 dagen. $word1 is bij uitstek het feest van zotheid, spot 
            en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel 
            Nederland een gebruik om $word1 op carnavalsvrijdag te openen. Op 
            Aswoensdag wordt $word1 afgesloten, maar de tradities verschillen per 
            regio. In het overgrote deel van $word4 wordt er afgesloten met 
            $word5 soms met een Brabantse koffietafel.</p>";

            echo $story;
        ?>
        <?php
            echo "<h1>Taak 2</h1>";
        ?>
        <?php
            $bon1 = 32;
            $bon2 = 54;
            $bon3 = 22;
            $total = $bon1 + $bon2 + $bon3;
            $bedrag = "Het totaalbedrag is ";
            $pp = $total / 4;
            $kosten = "<p>Kosten per persoon bedragen: $pp Euro </p>";
            echo $bedrag, $total;
            echo $kosten;
        ?>
    </section>
</main>
</body>
</html>

