<?php
// User: sid van eijndhoven
// Date: 20-2-2024
// File: enquete.php
?>
<html>
<head>
    <title>
        <?php
        echo 'Tandarts praktijk Denbosch';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Styles/vragenlijst.css" rel="stylesheet">
</head>
<body>
<img id='logo' src='../Images/logo_1.png'>
<!--navigatie die ik heb geinclude-->
<?php
$indexNav ="../";
$vragNav ="";
include "../Includes/nav2.php";
?>
<!--vragenlijst met label waar je de vragen neerzet de methode is get en de type is radio-->
<h1> Vragenlijst: </h1>
<form action="resultaten.php" method="GET">
        <h3> 1) Hoevaak poets je per dag?</h3>
        <input type="radio" name="vraag1" value="10">
        <label > 2 keer per dag</label><br>
        <input type="radio" name="vraag1" value="5">
        <label > 1 keer per dag</label><br>
        <input type="radio" name="vraag1" value="10">
        <label > minder dan 1 keer per dag</label><br>

        <h3> 2)  Gebruik je na iedere maaltijd of minimaal 1 keer per dag? </h3>
        <input type="radio" name="vraag2" value="10">
        <label > Rager</label><br>
        <input type="radio" name="vraag2" value="5">
        <label > Tandenstoker</label><br>
        <input type="radio" name="vraag2" value="-5">
        <label > Niks</label><br>

        <h3>  3) Ga je ieder halfjaar naar een mondhygieniste om je tandplak te laten verwijderen?</h3>
        <input type="radio" name="vraag3" value="10">
        <label > Ja</label><br>
        <input type="radio" name="vraag3" value="5">
        <label > Minder dan 1 keer per jaar</label><br>
        <input type="radio" name="vraag3" value="0">
        <label > Nee</label><br>

        <h3> 4) Gebruik je een electrische tandenborstel?   </h3>
        <input type="radio" name="vraag4" value="10">
        <label > Ja</label><br>
        <input type="radio" name="vraag4" value="5">
        <label > Nee</label><br>

        <h3> 5) Gebruik je een tandpasta met fluoride? </h3>
        <input type="radio" name="vraag5" value="10">
        <label > Ja</label><br>
        <input type="radio" name="vraag5" value="5">
        <label > Nee</label><br>


        <h3>   6) Heb je wel eens last van een stinkende adem?</h3>
        <input type="radio" name="vraag6" value="10">
        <label > Nee</label><br>
        <input type="radio" name="vraag6" value="5">
        <label > Ja</label><br>

        <h3>   7) Gebruik je wel eens een tongschraper?</h3>
        <input type="radio" name="vraag7" value="10">
        <label > Nee</label><br>
        <input type="radio" name="vraag7" value="5">
        <label > Ja</label><br>

        <h3>   8) Heb je weleens last van bloedend tandvlees?</h3>
        <input type="radio" name="vraag8" value="10">
        <label > Nee</label><br>
        <input type="radio" name="vraag8" value="-10">
        <label > Ja</label><br>

        <h3>   9) Poets je minimaal 2 minuten en werk je alles grondig af? </h3>
        <input type="radio" name="vraag9" value="10">
        <label > Ja</label><br>
        <input type="radio" name="vraag9" value="5">
        <label > Nee</label><br>

    <p>
<!--        submit het resultaat sturen-->
    <input class="bn54" type="submit" value="Heb ik een gezond gebit?">
        <span class="bn54span"></span>
    </p>
</form>
</body>
</html>





