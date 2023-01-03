<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo de Sobrecarga</title>
</head>
<body>
    <h1>Polimorfismo de Sobrecarga</h1>
    <h2>
    <?php
        require_once "Cachorro.php";

        $m = new Cachorro();
        $m->emitirSom();
    ?>
</body>
</html>