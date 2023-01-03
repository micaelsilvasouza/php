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
    <?php
        require_once "Cachorro.php";

        $m = new Cachorro();
        $m->emitirSom();
        $m->reagirFrase("ola");
        $m->reagirFrase("vai apanhar");
        $m->reagirHora(11);
        $m->reagirHora(21);
        $m->reagirDono(true);
        $m->reagirDono(false);
        $m->reagirIdadePeso(2, 12.5);
        $m->reagirIdadePeso(17, 4.5);
    ?>
</body>
</html>