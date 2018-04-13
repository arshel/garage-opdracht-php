<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-update-auto3</title>
</head>
<body>
<h1>garage update auto3</h1>
<p>autogegevens wijzigen in de tabel auto van de database garage</p>
<?php
// klant gegevens uit het formulier halen
$autoid = $_POST["autoidvak"];
$autokenteken = $_POST["autokenteken"];
$automerk = $_POST["automerk"];
$autotype = $_POST["autotype"];
$autokmstand = $_POST["autokmstand"];
$klantid = $_POST["klant_id"];

//update klantgegevens
require_once "connect.php";

$sql = $connect->prepare(" update auto set autokenteken = :autokenteken, automerk = :automerk, autotype = :autotype, autokmstand = :autokmstand, klant_id = :klant_id where autoid = :autoid");

$sql->execute(
    [
        "autoid" => $autoid,
        "autokenteken" => $autokenteken,
        "automerk" => $automerk,
        "autotype" => $autotype,
        "autokmstand" => $autokmstand,
        "klant_id" => $klantid

    ]);
echo "de auto is gewijzigd. <br>";
echo "<a href='menu.php'> terug naar het menu</a>"
?>
</body>
</html>



<?php
///**
// * Created by PhpStorm.
// * User: Gebruiker
// * Date: 12-4-2018
// * Time: 12:42
// */
//?>
<!---->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>garage menu</title>-->
<!--</head>-->
<!--<body>-->
<!--<h1>garage update auto 3</h1>-->
<!---->
<!--<p> een auto updaten</p>-->
<!---->
<!---->
<?php
//
////klant gegevens uit het formulier halen
//
//$autoid = $_POST ["autoidvak"];
//$autokenteken = $_POST ["autokenteken"];
//$automerk = $_POST["automerk"];
//$autotype = $_POST["automerk"];
//$autokmstand = $_POST["autokmstand"];
//$klant_id = $_POST["klant_id"];
//
//// klant gegevens invoeren
//
//require_once "connect.php";
//
//$sql = $connect->prepare("UPDATE auto SET  autokenteken = :autokenteken, automerk = :automerk, autotype = :autotype, autokmstand = :autokmstand, klant_id, :klant_id WHERE autoid = :autoid");
//
//
//$sql->bindParam(":autoid", $autoid);
//$sql->bindParam(":autokenteken", $autokenteken);
//$sql->bindParam(":automerk", $automerk);
//$sql->bindParam(":autotype", $autotype);
//$sql->bindParam(":autokmstand", $autokmstand);
//$sql->bindParam(":klant_id", $klant_id);
//$sql->execute();
//
//
//echo "de auto is gewijzigd <br>";
//echo "<a href='menu.php'> terug naar het menu </a>"
//?>
<!--</body>-->
<!--</html>-->