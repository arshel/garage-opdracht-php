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
if (isset($_POST['submit'])) {
    $autoid = NULL;
    $kenteken = $_POST ["kentekenvak"];
    $automerk = $_POST["automerkvak"];
    $autotype = $_POST["autotypevak"];
    $autokmstand = $_POST["autokmstandvak"];
    $klantid = $_POST["klantidvak"];
    $image = $_FILES['image']['name'];
// auto gegevens invoeren
    require_once "connect.php";
    $sql = $connect->prepare("insert into auto VALUES (:autoid, :autokenteken, :automerk, :autotype, :autokmstand, '$image',  :klantid)");
    $sql->bindParam(":autoid", $autoid);
    $sql->bindParam(":autokenteken", $kenteken);
    $sql->bindParam(":automerk", $automerk);
    $sql->bindParam(":autotype", $autotype);
    $sql->bindParam(":autokmstand", $autokmstand);
    $sql->bindParam(":klantid", $klantid);
    $sql->execute();
    // Get image name

    // Get text
    //$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "uploads/".basename($image);

    $sql = "INSERT INTO auto (image) VALUES ('$image')";
    // execute query
    // mysqli_query( $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo  "foto is geupload" . "<br>";
    }else{
        echo "foto is niet geupload";
    }
}

echo "de auto is toegevoegd <br>";
echo "<a href='menu.php'> terug naar het menu </a>"
?>
</body>
</html>