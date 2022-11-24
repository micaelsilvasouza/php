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
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->destampar();
            print_r($c1);
            $c1->rabiscar();
            echo "<h1>Caneta 2:</h1>";
            $c2 = new Caneta;
            $c2->cor = "Verde";
            $c2->carga = 50;
            $c2->tampar();
            print_r($c2);
            $c2->rabiscar();
        ?>
    </pre>
</body>
</html>