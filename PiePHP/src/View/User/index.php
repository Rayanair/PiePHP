<?php
$id = $_SERVER["REQUEST_URI"];
$userid = explode("/", $id);
echo $userid[4]; 
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
    <form action="http://localhost:8888/PiePHP/user/modifier/<?=$userid[4]?>/">
        <input type="submit" value="Modifier son profil">
    </form>
    <form action='http://localhost:8888/PiePHP/user/show/<?=$userid[4]?>/'>
        <input type="submit" value="Voir son profil">
    </form>
    <form action="http://localhost:8888/PiePHP/user/supprimer/<?=$userid[4]?>/">
        <input type="submit" value="supprimer son profil">
    </form>

    <form action="http://localhost:8888/PiePHP/movie/index/<?=$userid[4]?>">
        <input type="submit" value="Voir les films">
    </form>
    
    <form action="http://localhost:8888/PiePHP/movie/add/<?=$userid[4]?>">
        <input type="submit" value="Ajouter Film">
    </form>
    <form action="http://localhost:8888/PiePHP/genre/index/<?=$userid[4]?>/">
        <input type="submit" value="Genre">
    </form>
</body>
</html>


