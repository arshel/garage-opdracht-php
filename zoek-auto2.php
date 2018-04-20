<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-4-2018
 * Time: 12:25
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
<h1>garage zoek auto</h1>

<p>op autotid gegevens uit de tabel halen</p>


<?php

//klant uit formulier halen
$autoid =$_POST["autoidvak"];
require_once "connect.php";
// gegevens uit de tabel halen
$sql = $connect->prepare("SELECT autoid, autokenteken, automerk, autotype, autokmstand, klant_id FROM auto WHERE autoid = :autoid");
$sql->execute(["autoid" => $autoid]);



// klant gegevens laten zien
echo "<table>";
echo "<thead>";
echo "<th>auto id</th>";
echo "<th> kenteken</th>";
echo "<th>auto merk</th>";
echo "<th>autotype</th>";
echo "<th> autokmstand</th>";
echo "<th>klant id</th>";
echo "</thead>";
foreach ($sql as $rij){
    echo "<tr>";
    echo "<td>" . $rij["autoid"] . "</td>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<td>" . $rij["klant_id"] . "</td>";
    echo "<tr>";
}
echo "<table>";
echo "<a href='menu.php'> terug naar het menu </a>"
?>
</body>
</html>