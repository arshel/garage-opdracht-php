<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 11-4-2018
 * Time: 09:42
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
<h1>garage zoekt op klantid 1</h1>

<p>dit formulier zoekt een klant op uit de tabel klanten van database garage</p>


<form action="zoek-klant2.php" method="post">
    <label for="klantzoek"> welke klant zoekt u? </label>
    <input id="klantzoek" name="klantidvak" type="text">
    <br>

    <input type="submit">
</form>

</body>
</html>
