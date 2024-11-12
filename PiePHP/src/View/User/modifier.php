<?php
$id = $_SERVER["REQUEST_URI"];
$userid = explode("/", $id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modifier profil</h1>
    <form action="http://localhost:8888/PiePHP/user/update/<?=$userid[4]?>/" method="POST">
        <input type="text" name="city" placeholder="city">
        <input type="text" name="zipcode" placeholder="zipcode">
        <input type="text" name="country" placeholder="country">
        <input type="text" name="firstname" placeholder="firstname">
        <input type="text" name="lastname" placeholder="lastname">
        <input type="text" name="address" placeholder="address">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Modifier">
    </form>
</body>
</html>