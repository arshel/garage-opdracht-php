<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 12-4-2018
 * Time: 12:32
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

<p>dit formulier word gebruikt om autogegevens te wijzigen</p>


<form action="update-auto2.php" method="post">
    <label for="autoidvak"> welke auto wilt u wijzigen </label>
    <input id="autoidvak" name="autoidvak" type="text">
    <br>

    <input type="submit" class="btn">
</form>

</body>
</html>