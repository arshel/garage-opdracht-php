<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 11-4-2018
 * Time: 09:52
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
    <h1>garage update klant</h1>

    <p>op klantid gegevens uit de tabel halen</p>


<?php

//klant uit formulier halen
$klantid =$_POST["klantidvak"];
require_once "connect.php";
// gegevens uit de tabel halen
$klanten = $connect->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);

echo "<form action='update-klant3.php' method='post'>";
foreach ($klanten as $klant){
    //klantid mag niet gewijzigd worden
    echo "klantid:" . $klant["klantid"];
    echo "<input type='hidden' name='klantidvak'";
    echo "value='" . $klant["klantid"] . " '> <br> ";

    echo "klantnaam: <input type='text'";
    echo "name = 'klantnaamvak'";
    echo "value='" . $klant["klantnaam"] . " ' ";
    echo "> <br>";

    echo "klantadres: <input type='text'";
    echo "name = 'klantadresvak'";
    echo "value='" . $klant["klantadres"] . " ' ";
    echo "> <br>";

    echo "klantpostcode: <input type='text'";
    echo "name = 'klantpostcodevak'";
    echo "value='" . $klant["klantpostcode"] . " ' ";
    echo "> <br>";

    echo "klantplaats: <input type='text'";
    echo "name = 'klantplaatsvak'";
    echo "value='" . $klant["klantplaats"] . " ' ";
    echo "> <br>";

}

echo "<input type='submit'>";
echo "</form>";

// er moet eigenlijk nog gecontroleerd worden op een bestaande klant
?>
    </body>
    </html>
