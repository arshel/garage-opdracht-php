<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-4-2018
 * Time: 12:10
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
<h1>garage read auto's</h1>

<p>dit zijn alle gegevens uit de tabel auto van de database gegevens</p>

<div id="content">


</div>

<?php

require_once "connect.php";

$sql = $connect->prepare("SELECT autokenteken, automerk, autotype, autokmstand, image, klant_id FROM auto");
$sql->execute();



echo "<table>";
echo "<thead>";
echo "<th> kenteken</th>";
echo "<th>auto merk</th>";
echo "<th>autotype</th>";
echo "<th> autokmstand</th>";
echo "<th>image</th>";
echo "<th>klant id</th>";
echo "</thead>";
foreach ($sql as $rij){
    echo "<tr>";
    echo "<td>" . $rij["autokenteken"] . "</td>";
    echo "<td>" . $rij["automerk"] . "</td>";
    echo "<td>" . $rij["autotype"] . "</td>";
    echo "<td>" . $rij["autokmstand"] . "</td>";
    echo "<td>" . $rij["image"] . "</td>";
    echo "<td>" . $rij["klant_id"] . "</td>";
    echo "<tr>";
}
echo "<table>";
echo "<a href='menu.php'> terug naar het menu </a>"
?>
</body>
</html>