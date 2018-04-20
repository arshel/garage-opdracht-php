<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 11-4-2018
 * Time: 10:08
 */

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <title>garage menu</title>
</head>
<body>
<h1>garage update klant 3</h1>

<p> een klant updaten</p>


<?php

//klant gegevens uit het formulier halen


// klant gegevens invoeren
if (empty($_POST['klantidvak'])){
    echo "de klant bestaat niet";
    echo "<a href='menu.php'> terug naar het menu </a>";
}
else {
    $klantid = $_POST ["klantidvak"];
    $klantnaam = $_POST ["klantnaamvak"];
    $klantadres = $_POST["klantadresvak"];
    $klantpostcode = $_POST["klantpostcodevak"];
    $klantplaats = $_POST["klantplaatsvak"];

    require_once "connect.php";


    $sql = $connect->prepare("UPDATE klant SET klantnaam = :klantnaam, klantadres = :klantadres, klantpostcode = :klantpostcode, klantplaats =  :klantplaats WHERE klantid = :klantid");


    $sql->bindParam(":klantid", $klantid);
    $sql->bindParam(":klantnaam", $klantnaam);
    $sql->bindParam(":klantadres", $klantadres);
    $sql->bindParam(":klantpostcode", $klantpostcode);
    $sql->bindParam(":klantplaats", $klantplaats);
    $sql->execute();


    echo "de klant is gewijzigd <br>";
    echo "<a href='menu.php'> terug naar het menu </a>";



}
?>
</body>
</html>