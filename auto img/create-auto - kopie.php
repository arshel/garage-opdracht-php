<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-4-2018
 * Time: 11:52
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
<h1>garage create auto</h1>

<p> dit formulier worrd gebruikt om autogegevens in te voeren</p>


<form action="create-auto2.php" method="post" enctype="multipart/form-data">
    <label for="kenteken"> auto kenteken: </label>
    <input id="kenteken" name="kentekenvak" type="text">
    <br>
    <label for="merk">auto merk: </label>
    <input id="merk" name="automerkvak" type="text">
    <br>
    <label for="type">auto type: </label>
    <input id="type" name="autotypevak" type="text">
    <br>
    <label for="kmstand">auto km stand</label>
    <input id="kmstand" name="autokmstandvak" type="text">
    <br>
    <label for="klantid">klantid:</label>
    <input id="klantid" name="klantidvak" type="text">
    <br>
    <label for="fileToUpload"> foto upload</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <input type="submit" class="btn" name="submit">
</form>

</body>
</html>
