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
            require_once "carro.php";

            echo "<h1>Carro 1:</h1>";           
            $c1 = new Carro;                   
            $c1->modelo = "Gol G5";
            $c1->marca = "VW";
            $c1->cor = "Vermelho";
            $c1->potencia = 1.6;
            $c1->ligar();
            print_r($c1);
            $c1->dirigir();
        ?>
    </pre>
</body>
</html>