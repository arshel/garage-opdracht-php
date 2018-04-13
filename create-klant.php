<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-4-2018
 * Time: 12:02
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
<h1>garage create klant</h1>

<p> dit formulier worrd gebruikt om klantgegevens in te voeren</p>


    <form action="create-klant2.php" method="post">
        <label for="username"> klantnaam </label>
        <input id="username" name="klantnaamvak" type="text">
        <br>
        <label for="adres">klantadres </label>
        <input id="adres" name="klantadresvak" type="text">
        <br>
        <label for="postcode">klantpostcode </label>
        <input id="postcode" name="klantpostcodevak" type="text">
        <br>
        <label for="plaats">klantplaats</label>
        <input id="plaats" name="klantplaatsvak" type="text">
        <br>

        <input type="submit">
    </form>

</body>
</html>
