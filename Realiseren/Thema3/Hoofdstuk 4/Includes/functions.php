<?php
/**
 * User: Sid van eijndhoven
 * Date: 28-2-2024
 * File: T3_REA_Oefening 4.2.php
 */
?>
<?php
function CheckTrafficLight($welhulp, $geenhulp)
{
if ($geenhulp >= 10)
{
echo"rij zelf door naar het ziekenhuis <br><br>";

if ($geenhulp =="red")

{
echo"stop met rijden het stoplicht is rood! <br>";
}
else{
echo"het stoplicht is groen rij door!!";
}
}

else{
echo" stop met rijden er is een ambulance onderweg";
}
}

function showmenu($dag)
{
    switch($dag)
    {
        case "maandag":
            echo"Vis";
        Break;
        case "dinsdag":
            echo"Konijn";
            Break;
        case "woensdag":
            echo"Hollandse pot";
            Break;
        case "donderdag":
            echo"Kip";
            Break;
        case "vrijdag":
            echo"Soep";
            Break;
        case "zaterdag":
            echo"Friet";
            Break;
        case "zondag":
            echo"Pizza";
            Break;
        default:
            echo"dit is geen dag";

    }
}
//$dag = "donderdag";
//showmenu($dag);
