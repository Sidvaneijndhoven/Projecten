<!--
    Author:     Rob Wessels
    Date:       feb 2021

    Subject:    Result oefening 4.1  top: include
                Startende tags, head, header, ul (menulist)
-->
<html lang="en-us">
    <head>
        <title>

        </title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width initial-scale=1" >
        <script src="../scripts/scriptpages.js" defer></script>
        <!-- nieuwe style -->
        <link rel="stylesheet" href="../styles/stylesheet.css">
    </head>
    <body>
        <header>
            <h1><a href='../index.php'>Al Pacino</a></h1>
            <h3>...in zijn rollen als gangster</h3>
            <h3>
                <?php
                    echo  date_default_timezone_set('europe/Amsterdam');
                ?>
                <?php
                    echo date("d-m-y") . "</br>";
                    echo date("H:i");
                ?>
            </h3>
        </header>
        <main>
            <nav>
                <ul id="menu_list_pages">
                    menulijst loading . . .
                </ul>
            </nav>
