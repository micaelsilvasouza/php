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
        require_once "luta.php";
        
        $l1 = new Lutador("Josnei","Reino Unido", 30, 160, 90.8, 7,5,3);
        $l2 = new Lutador("Jhone Bravo", "Alemanha", 20,160,90,7,5,2);
        $lu = new Luta;
        $lu->marcarLuta($l1, $l2);
        $lu->lutar()
    ?>
</body>
</html>