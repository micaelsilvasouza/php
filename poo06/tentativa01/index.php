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
        
        $l1 = new Lutador("Josnei","Reino Unido", 30, 160, 90.8, 7,5,3);
        $l1->empatarLuta();
        $l1->ganharLuta();
        $l1->apresentar();
        $l1->status();
    ?>
</body>
</html>