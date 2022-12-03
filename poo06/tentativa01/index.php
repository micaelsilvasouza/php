<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutadores</title>
</head>
<body>
    <h1>Cadastrando lutadores</h1>
    <?php
        require_once "lutador.php";
        
        $l1 = new Lutador("Josnei", 30, 90.8);
        $l1->setVitorias(7);
        $l1->setDerrotas(5);
        $l1->setEmpates(3);
        $l1->empatarLuta();

        $l1->apresentar();
        $l1->status();
    ?>
</body>
</html>