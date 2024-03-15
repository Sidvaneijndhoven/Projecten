<?php
/**
 * User: sid van eijndhoven
 * Date: 13-3-2024
 * File: T3_REA_Oefening 5.2.php
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

<form action="resultaat.php" method="post">
            <table>
                <tr>
                    <td colspan="2">
                        <h1>Inloggen</h1>
                        Welkom op onze website. <br>
Na correct in te loggen, krijgt u toegang tot onze schatkist. Deze is dan voor u, om te gebruiken!
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>

                <tr>
                    <td colspan="">
                        <input type="submit" value="Verzenden">
                    </td>
                </tr>
            </table>
        </form>
