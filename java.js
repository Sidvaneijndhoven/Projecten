// aangemaakt door: Justin van Ravenstein
// date: 28-03-2024
// script bestand voor nagavitie

function Toonnaam()
{
    //vraag de bezoeker naar zijn naam
    return prompt ("Wat is uw naam?");
}
document.getElementById("koptekst").innerHTML= "Welkom: " + Toonnaam(); // Laad het in de html wat er is ingevuld in de prompt

// function die het hamburger menu maakt
function myFunction() {
    var x = document.getElementById("menu");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

