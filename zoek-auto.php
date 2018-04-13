<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-4-2018
 * Time: 12:15
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
<h1>garage auto op klantid 1</h1>

<p>dit formulier zoekt een auto op uit de tabel klanten van database garage</p>


<form action="zoek-auto2.php" method="post">
    <label for="autozoek"> welke auto zoekt u? </label>
    <input id="autozoek" name="autoidvak" type="text">
    <br>

    <input type="submit">
</form>

<form action="zoek-type2.php" method="post">
    <label for="autozoek"> welke type auto zoekt u? </label>
    <input id="autozoek" name="autotypevak" type="text">
    <br>

    <input type="submit">
</form>


</body>
</html>
