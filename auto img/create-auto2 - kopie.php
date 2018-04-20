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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
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
$foto = $_FILES["fileToUpload"]['tmp_name'];
//$foto = $_POST["fileToUpload"]['tmp_name'];
// auto gegevens invoeren

require_once "connect.php";



$sql = $connect->prepare("insert into auto VALUES (:autoid, :autokenteken, :automerk, :autotype, :autokmstand, :foto, :klantid)");

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . "." . "<br>";
        $uploadOk = 1;
    } else {

        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded." . "<br>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$sql->bindParam(":autoid", $autoid);
$sql->bindParam(":autokenteken", $kenteken);
$sql->bindParam(":automerk", $automerk);
$sql->bindParam(":autotype", $autotype);
$sql->bindParam(":autokmstand", $autokmstand);
$sql->bindParam(":klantid", $klantid);
$sql->bindParam(":foto", $foto);

$sql->execute();
echo "de auto is toegevoegd <br>";
echo "<a href='menu.php'> terug naar het menu </a>"
?>
</body>
</html>