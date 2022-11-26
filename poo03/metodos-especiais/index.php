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
            $c1 = new Caneta;
            $c1->setModelo("BIC");
            $c1->setPonta(0.5);
            print_r($c1);
            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}."
        ?>
    </pre>
    <a href="segunda.php">Outra Caneta</a>
</body>
</html>