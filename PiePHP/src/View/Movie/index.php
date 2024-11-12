<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Les Films</h1>
    <?php
    foreach ($scope as $key => $value) {
            echo "<form method='POST' action='http://localhost:8888/PiePHP/movie/show/$value[0]'>";
            echo "<pre>";
            echo "Nom :".$value[2]."\n";
            echo "Directeur :".$value[3]."\n";
            echo "Durée :".$value[4]."\n";
            echo "Date de réalisation :".$value[5]."\n";
            echo "Classification :".$value[6]."\n";
            echo "<input type='submit' value='Voir'/>";
            echo "</pre>";
            echo "</form>";
    }
      ?>
</body>
</html>