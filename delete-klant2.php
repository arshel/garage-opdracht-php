<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 11-4-2018
 * Time: 10:21
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
    <h1>garage delete klant</h1>

    <p>op klantid gegevens uit de tabel verwijderen</p>


<?php

//klant uit formulier halen
$klantid =$_POST["klantidvak"];
require_once "connect.php";
// gegevens uit de tabel halen
$klanten = $connect->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);
// klantgegevens laten zien
echo "<table>";
echo "<thead>";
echo "<th>klant id</th>";
echo "<th>naam</th>";
echo "<th>adres</th>";
echo "<th>postcode</th>";
echo "<th>plaats</th>";
echo "</thead>";
foreach ($klanten as $klant){
    echo "<tr>";
    echo "<td>" . $klant["klantid"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "<td>" . $klant["klantadres"] . "</td>";
    echo "<td>" . $klant["klantpostcode"] . "</td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
    echo "<tr>";
}
echo "</table> <br>";

echo "<form action='delete-klant3.php' method='post'>";

    //klantid mag niet gewijzigd worden
    echo "<input type='hidden' name='klantidvak' value='$klantid'>";
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "verwijder deze klant";
    echo "<input type='submit'>";
    echo "</form>";

// er moet eigenlijk nog gecontroleerd worden op een bestaande klant
?>
    </body>
    </html>