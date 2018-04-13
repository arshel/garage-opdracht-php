<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-4-2018
 * Time: 13:24
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
    <h1>garage deleteauto</h1>

    <p>opautoid gegevens zoeken uit de tabel auto van de database</p>
<?php

//klant uit formulier halen
$autoid =$_POST["autoidvak"];
$verwijderen = $_POST["verwijdervak"];


if($verwijderen) {
    require_once "connect.php";

    $sql = $connect->prepare("DELETE FROM auto WHERE autoid = :autoid");
    $sql->execute(["autoid" => $autoid]);

    echo "de gegevens zijn verwijderd. <br>";

}
else {
    echo "de gegevens zijn niet verwijderd. <br>";

}

echo "<a href='menu.php'>terug naar het menu. </a>";