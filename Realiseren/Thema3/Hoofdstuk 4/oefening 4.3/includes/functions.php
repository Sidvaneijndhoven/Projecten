<!--auteur: Sid van Eijndhoven-->
<!--Datum: 8-3-2024-->

<!--berekent hoeveel seconden het geleden is van 1970-01-1-->
<?php
    $datetime = '1970-01-1 00:00:00';

    $unix_time = date('Ymdhis', strtotime($datetime ));
    echo "Taak 1: Het is " . $unix_time . " seconden geleden sinds 1970-1-1<br>";
?>
<!--function die berekent hoelang het duurt om een auto te kopen-->
<?php
function CalculateInterest($autoPrijs, $gespaardBedrag)
{

    echo "<br> Taak 2: We gaan berekenen hoeveel maanden het duurt om genoeg rente te sparen om een auto te kopen.\n";
    echo "De prijs van de auto is €$autoPrijs en het gespaarde bedrag is €$gespaardBedrag.\n" . "<br>";

    $counter = 0;

    while ($gespaardBedrag < $autoPrijs)
    {

        $counter++;

        $gespaardBedrag *= 1.06;

        echo "<br> Maand  $counter: Gespaarde bedrag is nu €$gespaardBedrag<br>";
        $gespaardBedrag = round($gespaardBedrag, 0);
    }


   echo "<br>Het duurt $counter maanden om genoeg rente te sparen om de auto te kopen<br>";
}

CalculateInterest(10000, 5000);

?>
<!--for loops die een piramide maakt-->
<?php
    echo "<br>Taak 3:"
?>
<?php
    for($i = 0; $i <= 9; $i++) {

        for($j = 0; $j <= $i; $j++){

            echo "*";

        }

        echo "<br />";
    }

    for($i = 9; $i >= 0; $i--){

        for($j = $i; $j >= 0; $j--){

            echo "*";
        }
        echo "<br />";
    }
?>

