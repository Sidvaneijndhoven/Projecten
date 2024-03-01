/*
Auteur:         Rob Wessels
Aanmaakdatum:   feb 2021

Onderwerp:      PHP

*/

var menuItems = ["The Godfather", "Scarface", "Donnie Brasco", "Carlito's Way"];


document.getElementById("menu_list_pages").innerHTML = 
       "<li><a href=\"godfather.php\">" + menuItems[0] + "</a></li>" +
        "<li><a href=\"scarface.php\">" + menuItems[1] + "</a></li>" +
        "<li><a href=\"donniebrasco.php\">" + menuItems[2] + "</a></li>" +
        "<li><a href=\"carlitosway.php\">" + menuItems[3] + "</a></li>" ;

        
