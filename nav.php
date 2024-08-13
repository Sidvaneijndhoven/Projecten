<?php
//User: sid van eijndhoven, Harris van Weert en Justin van Ravenstein
//Date: 19-3-2024
//File: nav.php
?>
<?php
?>
<!--navigatie opmaak zodat deze niet op elke pagina gemaakt hoeft te worden en gemakkelijk op te roepen is-->
<nav>
    <div class="hamburger">
        <ul>
            <li>
                <a href="<?php echo $indexnav ;?>index.php" id="active">Home</a>
            </li>
            <div id="menu">
                <li>
                    <a href="#">Aanbod</a>
                </li>
                <li>
                    <a href="<?php echo $vragnav ;?>vragen.php">Vragenlijst</a>
                </li>
                <li>
                    <a href="#">Over ons</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i id="bar"></i> </a>
        </ul>
    </div>
</nav>
