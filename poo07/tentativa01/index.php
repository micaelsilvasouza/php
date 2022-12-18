<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio prático de POO PHP</title>
</head>
<body>
    <h1>Exercicio prático de POO PHP</h1>
    <?php
        require_once "Pessoa.php";
        require_once "Livro.php";

        $p1 = new Pessoa("Januário", 25, "Masculino");
        $p1->fazerAniver();

        $l1 = new Livro("MundoAll", "Micael Silva", 130, 130, $p1);
        echo $l1->detalhes();
        $l1->fechar();
        $l1->abrir();
        $l1->avançarPag();
        $l1->folhear();
        $l1->voltarPag();
    ?>
</body>
</html>