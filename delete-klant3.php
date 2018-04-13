<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 11-4-2018
 * Time: 10:50
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
    <h1>garage delete klant</h1>

    <p>op klant id gegevens zoeken uit de tabel klanten van de database</p>
<?php

//klant uit formulier halen
$klantid =$_POST["klantidvak"];
$verwijderen = $_POST["verwijdervak"];
if($verwijderen) {
    require_once "connect.php";

    $sql = $connect->prepare("DELETE FROM klant WHERE klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);

    echo "de gegevens zijn verwijderd. <br>";

}
else {
    echo "de gegevens zijn niet verwijderd. <br>";

}

echo "<a href='menu.php'>terug naar het menu. </a>";