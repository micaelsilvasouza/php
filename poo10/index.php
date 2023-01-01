<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <h1>Polimorfismo de SobrePosição</h1>
    <?php
        require_once "Mamifero.php";
        require_once "Repitil.php";
        require_once "Peixe.php";
        require_once "Ave.php";
        require_once "Canguru.php";
        require_once "Cachorro.php";
        require_once "Cobra.php";
        require_once "Tartaruga.php";
        require_once "GoldFish.php";
        require_once "Arara.php";

        $m = new Mamifero();
        $a = new Ave();
        $r = new Repitil();
        $c = new Canguru();
        $k = new Cachorro();
        $t = new Tartaruga();

        $m->emitirSom();
        $k->emitirSom();
        $c->emitirSom();
    ?>
</body>
</html>