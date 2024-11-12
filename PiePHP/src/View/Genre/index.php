<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Genre</h1>
    <?php
    foreach ($scope as $key => $value) {
            echo "<form method='POST' action='http://localhost:8888/PiePHP/genre/supprimer/$value[0]'>";
            echo "<pre>";
            echo "Nom :".$value[1]."\n";
            echo "<input type='submit' value='suprimer'/>";
            echo "</pre>";
            echo "</form>";
    }

      ?>
</body>
</html>