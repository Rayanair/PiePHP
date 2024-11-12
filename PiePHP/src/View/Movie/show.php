<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Le film</h1>
    <?= var_dump($scope) ?>

    <form action="/movie/supprimer/<?=$scope[0]?>">
    <input type="submit" value="supprimer">
    </form>
    <form action="/movie/update/<?=$scope[0]?>">
    <input type="submit" value="Modifier">
    </form>
</body>
</html>