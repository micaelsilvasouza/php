<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos Especias</title>
</head>
<body>
    <pre>
        <?php
            require_once "caneta.php";
            $c1 = new Caneta("Bic", "Azul", 0.5);
            $c2 = new Caneta("KKK", "Verde", 1.0);

            print_r($c1);
            print_r($c2);
        ?>
    </pre>
    <a href="segunda.php">Outra Caneta</a>
</body>
</html>