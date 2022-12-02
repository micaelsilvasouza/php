<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>
    <h1>Encapsulamento</h1>
    <h2>Projeto Controle Remoto</h2>
    <?php
        require_once "controleremoto.php";
        
        $c1 = new ControleRemoto();
        $c1->ligar();
        $c1->maisVolume();
        $c1->abrirMenu();
    ?>
</body>
</html>