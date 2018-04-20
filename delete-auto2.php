<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-4-2018
 * Time: 13:19
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
<h1>garage delete auto</h1>

<p>op autoid gegevens uit de tabel verwijderen</p>


<?php

//klant uit formulier halen
$autoid =$_POST["autoidvak"];
require_once "connect.php";
// gegevens uit de tabel halen
$autos = $connect->prepare("SELECT autoid, autokenteken, automerk, autotype, autokmstand, klant_id FROM auto WHERE autoid = :autoid");
$autos->execute(["autoid" => $autoid]);
// klantgegevens laten zien

echo "<form action='delete-auto3.php' method='post'>";
echo "<table>";
foreach ($autos as $auto){
    echo "<tr>";
    echo "<td>" . $auto["autoid"] . "</td>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "<td>" . $auto["klant_id"] . "</td>";
    echo "<tr>";
}
echo "<table><br>";
//klantid mag niet gewijzigd worden
echo "<input type='hidden' name='autoidvak' value='$autoid'>";
echo "<input type='hidden' name='verwijdervak' value='1'>";
echo "<input type='checkbox' name='verwijdervak' value='0'>";
echo "verwijder deze auto" . "<br>";
echo "<input type='submit'>";
echo "</form>";

// er moet eigenlijk nog gecontroleerd worden op een bestaande klant
?>
</body>
</html>