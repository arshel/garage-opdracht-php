<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-4-2018
 * Time: 09:17
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
<h1>garage zoek autotype</h1>

<p>op autotype gegevens uit de tabel halen</p>


<?php

//klant uit formulier halen
$autotype =$_POST["autotypevak"];
require_once "connect.php";
// gegevens uit de tabel halen
$sql = $connect->prepare("SELECT  auto.autotype, auto.autoid, klant.klantnaam, klant.klantadres, klant.klantpostcode, klant.klantplaats FROM klant JOIN auto on klant.klantid = auto.klant_id WHERE autotype = :autotype");
$sql->execute(["autotype" => $autotype]);



// klant gegevens laten zien
echo "<table>";
foreach ($sql as $rij){
    echo "<tr>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autoid"] . "</td>";
    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["klantadres"] . "</td>";
    echo "<td>" . $rij["klantpostcode"] . "</td>";
    echo "<td>" . $rij["klantplaats"] . "</td>";
    echo "<tr>";
}
echo "<table>";
echo "<a href='menu.php'> terug naar het menu </a>"
?>
</body>
</html>