<?php
//User: Sid van Eijndhoven
//Date: 7-5-2024
//File: nav.php
?>
<nav>
    <ul>
        <li id="onder">
            <a href="<?php echo $indexNav ;?>index.php">Over ons / Home</a>
        </li>
        <li>
            <a href="#">Onze dieren</a>
        </li>
        <li>
            <a href="#">Steun ons</a>
        </li>
        <li>
            <a href="#">Vrijwilligerswerk</a>
        </li>
        <li>
            <a href="#">Hondenpensioen</a>
        </li>
        <li>
            <a href="#">Look a like actie</a>
        </li>
        <li>
            <a href="<?php echo $vragNav ;?>Inlog.php">Inloggen</a>
        </li>
        <?php
//        als de sessie true is dus logged in wordt a href geladen bij de bestaande navigatie
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
        <div id="topper">
        <a href="<?php echo $inlog ;?>Inlog.php">U bent ingelogd klik hier om opnieuw in te loggen!</a>
        </div>
        <?php endif; ?>
    </ul>
</nav>