<?php

$totaalpunten = 0;

for($i=1;$i<3;$i++)
{
    $totaalpunten += $_GET["vraag$i"];
}
?>
