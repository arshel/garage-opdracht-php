<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-4-2018
 * Time: 11:57
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
<h1>garage createauto 2</h1>

<p> een auto toevoegen in de tabel auto</p>


<?php

//klant gegevens uit het formulier halen
$autoid = NULL;
$kenteken = $_POST ["kentekenvak"];
$automerk = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand = $_POST["autokmstandvak"];
$klantid = $_POST["klantidvak"];
// auto gegevens invoeren

require_once "connect.php";

$sql = $connect->prepare("insert into auto VALUES (:autoid, :autokenteken, :automerk, :autotype, :autokmstand, :klantid)");

$sql->bindParam(":autoid", $autoid);
$sql->bindParam(":autokenteken", $kenteken);
$sql->bindParam(":automerk", $automerk);
$sql->bindParam(":autotype", $autotype);
$sql->bindParam(":autokmstand", $autokmstand);
$sql->bindParam(":klantid", $klantid);

$sql->execute();


echo "de auto is toegevoegd <br>";
echo "<a href='menu.php'> terug naar het menu </a>"
?>
</body>
</html>