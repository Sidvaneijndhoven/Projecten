<?php
/**
 * User: sid van eijndhoven
 * Date: 11-3-2024
 * File: T3_REA_Oefening 5.1.php
 */
?>
<?php
    echo "taak1:";
?>
<?php
//Laat de input zien en heet je welkom
$input = $_POST["username"];
echo "<br><p> Welkom:</p> " . $input  . "<br>";
?>
<?php
    echo "<br>taak2:<br>";
?>
<!--Laat de input zien-->
<?php
$input2 = $_POST["password"];
?>

<!--username en password als dit niet goed wordt ingevoerd krijg je een foutmelding-->
<?php
    $username = "SidvanEijndhoven";
    $password = "P@ssword";
?>

<!--    Als de username niet klopt krijg je een foutmelding met username incorrect-->
    <?php
    if($input == $username)
    {
        echo "";
    }

    else
    {
        echo "<br>username incorrect";
    }
    ?>
<!--     Alleen als het wachtwoord goed wordt ingevuld krijg je de schatkist te zien anders password incorrect-->
    <?php
    if($input2 == $password)
    {
        echo "<img src='images/OIP.jpg' />";
    }

    else
    {
        echo "<br>password incorrect";
    }

    ?>


