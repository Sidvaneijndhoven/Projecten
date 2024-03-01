/*
Auteur:         Rob Wessels
Aanmaakdatum:   feb 2021

Onderwerp:      PHP

*/

var menuItems = ["The Godfather", "Scarface", "Donnie Brasco", "Carlito's Way"];

document.getElementById("menu_list").innerHTML = 
        "<li><a href=\"pages/godfather.php\">" + menuItems[0] + "</a></li>" +
        "<li><a href=\"pages/scarface.php\">" + menuItems[1] + "</a></li>" +
        "<li><a href=\"pages/donniebrasco.php\">" + menuItems[2] + "</a></li>" +
        "<li><a href=\"pages/carlitosway.php\">" + menuItems[3] + "</a></li>" ;



        
