<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    <pre>
        <?php
            require_once "caneta.php";
            echo "<h1>Caneta 1:</h1>";
            $c1 = new Caneta;
            $c1->modelo = "BIC cristal";
            $c1->cor = "Azul";
            //$c1->ponta = 0.5;
            $c1->tampar();
            $c1->rabiscar();
            print_r($c1);
        ?>
    </pre>
</body>
</html>