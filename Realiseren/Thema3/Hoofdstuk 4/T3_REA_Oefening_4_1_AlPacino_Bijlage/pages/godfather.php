<!DOCTYPE html>
<!-- 
    Auteur:             Rob JM Wessels
    Aanmaakdatum:       dec 2020
    
    KW1C instructie:    Resultaat opdracht 3.2 thema 2
-->
    <?php
    $title = "T3 Oef 4.1 godfather";
    include "../includes/top.php";
    ?>
        <header>
            <h1><a href="../index.php">Al Pacino</a></h1>
            <h3>...in zijn rollen als gangster</h3>
        </header>

        <main>
            <nav>
                <ul id="menu_list_pages">
                    menulijst loading . . .                   
                </ul>
            </nav>
        
            <article>
                <h2>The Godfather</h2>
                <p id="pargodfather">
                    <img id="godfather" src="../images/godfatherfingers.PNG" alt="Fingers">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et lectus a risus semper semper nec non lectus. Ut ac pulvinar lectus. Donec rhoncus rutrum tincidunt. Vivamus gravida sed arcu scelerisque dapibus. Sed porta laoreet nulla a consequat. Phasellus mattis, urna in interdum iaculis, sem eros fringilla odio, vel elementum libero nisi placerat urna. Nullam faucibus dui vitae eros lacinia, quis vulputate libero sagittis. 
                    
                </p>
            </article>

            <aside>
                <h2>Michael Corleone</h2>
                <p>
                    Na de dood van Don Vito Corleone wordt Michael de nieuwe Don...<br><a href="https://www.imdb.com/title/tt0071562/?ref_=fn_al_tt_2" target="_blank">(lees verder)</a>
                </p>
                <h2>Tony Montana</h2>
                <p>
                    De Cubaan Tony Montana start in Miami een drugsimperium...<br><a href="https://www.imdb.com/title/tt0086250/?ref_=fn_al_tt_1" target="_blank">(lees verder)</a>
                </p>
                <h2>Lefty Ruggiero</h2>
                <p>
                    De mobster Lefty laat wiseguy Joe Pistone zijn intrede in de bende doen...<br><a href="https://www.imdb.com/title/tt0119008/?ref_=fn_al_tt_1" target="_blank">(lees verder)</a>
                </p>
                <h2>Carlito Brigante</h2>
                <p>
                    Carlito komt uit de gevangenis en wil zijn leven beteren...<br><a href="https://www.imdb.com/title/tt0106519/" target="_blank">(lees verder)</a>
                </p>
            </aside>
        </main>
        <?php
        include "../includes/bottom.php"
            ?>