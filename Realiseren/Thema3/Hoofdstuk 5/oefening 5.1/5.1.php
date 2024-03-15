<?php
/**
 * User: sid van eijndhoven
 * Date: 11-3-2024
 * File: T3_REA_Oefening 5.1.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="" rel="stylesheet">
</head>
<body>
<?php
    echo "Oefening 5.1"
   ?>
<!--Form met alle vragen met method get de values worden uiteindelijk het resultaat-->
<form action="resultaten.php" method="get">

        <label>Voornaam en achternaam </label>
        <input name="antwoord1" type="text" value="naam">

        <br />
        <label>Studentennummer </label>
        <input name="antwoord2" type="text" value="nummer">
        <br />

        <label>Datum van uitschrijving</label>
        <input name="antwoord3" type="text" value="datum">
        <br />

        <label>Reden van uitschrijving</label>
        <select name="antwoord4">
            <option value="Saai">Saai</option>
            <option value="Te moeilijk">Te moeilijk</option>
            <option value="Geen reden">Geen reden</option>
        </select>

            <p> Leerjaar:</p>
        <input type="radio" name="antwoord5" value="1">
        <label> Leerjaar 1</label><br>
        <input type="radio" name="antwoord5" value="2">
        <label> Leerjaar 2 </label><br>
        <input type="radio" name="antwoord5" value="3">
        <label> Leerjaar 3 </label<br>
        <br />

        <input type="checkbox" name="antwoord6" value=" Wilt graag bij de succesklas">
        <label> Ik wil me aanmelden bij de succes klas</label><br>
        <input type="checkbox"  name="antwoord6" value=" Gegevens verwijderd">
        <label> Verwijder mijn gegevens uit het systeem</label><br>
        <br />

        <label>Geef hieronder de reden voor uitschrijving op:</label><br>
        <input type="text" name="antwoord7" value="reden"><br

        <button>
        <input type="submit" name="verzend" value="verzend">
        </button>
    </form>


