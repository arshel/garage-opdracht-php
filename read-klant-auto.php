<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-4-2018
 * Time: 08:39
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
<h1>garage read klant</h1>

<p>dit zijn alle gegevens uit de tabel klanten van de database gegevens</p>


<?php

require_once "connect.php";

$sql = $connect->prepare("SELECT klant.klantnaam, auto.autokenteken, auto.automerk, auto.autotype, auto.autokmstand, auto.autoid FROM klant JOIN auto on klant.klantid = auto.klant_id");
$sql->execute();

echo "<table>";

echo "<thead>";

echo "<th> naam</th>";
echo "<th>klant id</th>";
echo "<th> kenteken</th>";
echo "<th>auto merk</th>";
echo "<th>autotype</th>";
echo "<th> autokmstand</th>";
echo "</thead>";
foreach ($sql as $rij) {
    echo "<tr>";

    echo "<td>" . $rij["klantnaam"] . "</td>";
    echo "<td>" . $rij["autoid"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<tr>";
}
echo "<table>";
echo "<a href='menu.php'> terug naar het menu </a>"
?>
</body>
</html>