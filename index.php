<?php
/**
 * User: sid van eijndhoven, Harris van Weert en Justin van Ravenstein
 * Date: 19-3-2024
 * File: index.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Autoscout24';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/stylesheet.css" rel="stylesheet">
    <script src="scripts/java.js" rel="java"></script>
    <link rel="icon" href="Images/Scout24_AUTO_Logo.webp" type="image/icon type">
</head>
<body>
    <main>
        <img id="logo" src="Images/logo.png">
<!--        nav met include naar de navigatie en gemakkelijk op te roepen valt-->
        <?php
        $indexnav ="";
        $vragnav ="pages/";
            include "./Includes/nav.php"
        ?>
        <video autoplay muted loop id="myVideo">
            <source src="Images/vids/AutoScout24：%20Alles%20richtig%20gemacht%20(TV%20Spot%202024).mp4" type="video/mp4">
        </video>
        <div>
            <div id="rs7">
                <p>
                    <h1>
                    <a id="h1erbij" href="https://www.autoscout24.nl/aanbod/audi-rs7-mat-olijf-wrap-abt-3d-b-o-dynamic-plus-designpakke-benzine-grijs-311397cc-b025-42d3-bc18-9d88eee4d031?sort=standard&desc=0&lastSeenGuidPresent=false&cldtidx=9&position=9&search_id=nxaerfkm49&source_otp=t10&ap_tier=t10&source=listpage_search-results&order_bucket=2">
                    Audi rs7
                    </a>
                    </h1>
                    <img id="audi" src="Images/audi_rs7.jpg"/>
                    <img id="audi" src="Images/audi%20rs7%20interior.jpg">
                    €322.210<br>
                    09/2023|Benzine|33.212Km
                </p>
            </div>
            <div id="golf">
                <h1>
                    <a id="h1erbij" href="https://www.autoscout24.nl/aanbod/volkswagen-golf-gti-2-0-tsi-clubsport-45-jahre-akrapovic-benzine-zwart-8a6039a9-b868-4ef6-b680-27ac003fdd65?sort=standard&desc=0&lastSeenGuidPresent=true&cldtidx=5&position=5&search_id=tlor19jc6s&source_otp=t30&ap_tier=t30&source=listpage_search-results&order_bucket=5">
                        Volkswagen GTI</a>
                </h1>
                <img id="gti" src="Images/golf-gti.jpg">
                <img id="gti" src="Images/golf%20gti.jpg">
                     €40.433<br>
                    03|2023|Benzine|10.232Km
            </div>
        </div>
        <div id="urus">
        <h1>
            <a id="h1erbij" href="https://www.autoscout24.nl/aanbod/lamborghini-urus-4-0-v8-benzine-zwart-9e93d51d-8d35-44bf-900e-4fed2ce097b3?sort=standard&desc=0&lastSeenGuidPresent=true&cldtidx=1&position=1&search_id=2oqtj04889&source_otp=nfm&ap_tier=t10&source=listpage_search-results&order_bucket=0&topspot-algorithm=nfm-default&topspot-dealer-id=12191083">
            Mansory Urus</a>
            </h1>

        <img id="mansory" src="Images/mansory-urus.jpg">
        <img id="mansory" src="Images/OIP.jpg">
        €743.322<br>
        03|2023|Benzine|30.213Km
        </div>
        <h3>Ons hoofdkantoor is hier gevestigd, u kunt hier ook kijken waar uw auto zich bevindt:</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2437.6209500170366!2d4.860983176429883!3d52.34102227201481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c663eeeadd5f75%3A0x9d1a4703cb78733a!2sAutoScout24!5e0!3m2!1snl!2snl!4v1712231135025!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </main>
    <?php
    // Footer die wordt geinclude dat is makkelijker en bewaard zo overzicht
        include "./Includes/footer.php";
    ?>
</body>
</html>