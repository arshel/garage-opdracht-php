<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 11-4-2018
 * Time: 10:20
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
<h1>garage delete klant</h1>

<p>dit formulier word gebruikt om klantgegevens te verwijderen</p>


<form action="delete-klant2.php" method="post">
    <label for="klantdelete"> welke klant wilt u verwijderen? </label>
    <input id="klantdelete" name="klantidvak" type="text">
    <br>

    <input type="submit">
</form>

</body>
</html>