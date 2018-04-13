<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-4-2018
 * Time: 12:09
 */
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>garage menu</title>
</head>
<body>
<h1>garage create klant 2</h1>

<p> een klant toevoegen in de tabel klant</p>


<?php

//klant gegevens uit het formulier halen

    $klantid = NULL; // komt niet in het formulier
    $klantnaam = $_POST ["klantnaamvak"];
    $klantadres = $_POST["klantadresvak"];
    $klantpostcode = $_POST["klantpostcodevak"];
    $klantplaats = $_POST["klantplaatsvak"];

    // klant gegevens invoeren

        require_once "connect.php";

        $sql = $connect->prepare("insert into klant VALUES (:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)");


        $sql->bindParam(":klantid", $klantid);
        $sql->bindParam(":klantnaam", $klantnaam);
        $sql->bindParam(":klantadres", $klantadres);
        $sql->bindParam(":klantpostcode", $klantpostcode);
        $sql->bindParam(":klantplaats", $klantplaats);
$sql->execute();


        echo "de klant is toegevoegd <br>";
        echo "<a href='menu.php'> terug naar het menu </a>"
?>
        </body>
</html>