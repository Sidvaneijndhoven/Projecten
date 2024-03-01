<?php
/**
 * User: sid van eijndhoven
 * Date: 28-2-2024
 * File: T3_REA_Oefening 4.2.php
 */
?>
<body>
    <link href="./4.2.css" rel="stylesheet">
<main>
<?php
    include "../Hoofdstuk 4/Includes/top.php";
?>
<?php
    include "../Hoofdstuk 4/Includes/functions.php";
?>
    <?php
        echo "<h1 id='uitwerking'> Uitwerking oefening 4.2:</h1>"
    ?>
    <div>
    <?php
        echo "<h1> taak 1 en 2 </h1>"
    ?>
    <?php
    $geenhulp =11;
    $geenhulp ="red";
    $welhulp =10;
    CheckTrafficLight($welhulp,$geenhulp);
    ?>
    <?php
        echo "<h1> taak 3</h1>"
    ?>
    <?php
    $dag = "zaterdag";
    showmenu($dag);
    ?>
    </div>
</main>
</body>