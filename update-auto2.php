<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-4-2018
 * Time: 12:33
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
<h1>garage update auto</h1>

<p>op autoid gegevens uit de tabel halen</p>


<?php

//klant uit formulier halen
$autoid =$_POST["autoidvak"];
require_once "connect.php";
// gegevens uit de tabel halen
$autos = $connect->prepare("SELECT autoid, autokenteken, automerk, autotype, autokmstand, klant_id FROM auto WHERE autoid = :autoid");
$autos->execute(["autoid" => $autoid]);

echo "<form action='update-auto3.php' method='post'>";
foreach ($autos as $auto){
    //klantid mag niet gewijzigd worden
    echo "autoid:" . $auto["autoid"];
    echo "<input type='hidden' name='autoidvak'";
    echo "value='" . $auto["autoid"] . " '> <br> ";


    echo "autokenteken: <input type='text'";
    echo "name = 'autokenteken'";
    echo "value='" . $auto["autokenteken"] . " ' ";
    echo "> <br>";

    echo "automerk: <input type='text'";
    echo "name = 'automerk'";
    echo "value='" . $auto["automerk"] . " ' ";
    echo "> <br>";

    echo "autotype: <input type='text'";
    echo "name = 'autotype'";
    echo "value='" . $auto["autotype"] . " ' ";
    echo "> <br>";

    echo "autokmstand: <input type='text'";
    echo "name = 'autokmstand'";
    echo "value='" . $auto["autokmstand"] . " ' ";
    echo "> <br>";

    echo "klant_id: <input type='text'";
    echo "name = 'klant_id'";
    echo "value='" . $auto["klant_id"] . " ' ";
    echo "> <br>";



}

echo "<input type='submit'>";
echo "</form>";

// er moet eigenlijk nog gecontroleerd worden op een bestaande klant
?>
</body>
</html>
