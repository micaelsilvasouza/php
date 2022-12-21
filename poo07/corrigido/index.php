<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Prático</title>
</head>
<body>
    <h1>Exemplo Prático</h1>
    <?php
        require_once "Pessoa.php";
        require_once 'Livro.php';

        $p[0] = new Pessoa("João", 22, "M");
        $p[1] = new Pessoa("Maria", 31, "F");

        $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
        $l[1] = new Livro("POO em PHP", "Maria de Souza", 500, $p[0]);
        $l[2] = new Livro("PHP Avançado", "Ana Paula Castro", 800, $p[1]);

        $l[0]->abrir();
        $l[0]->folhear(80);

        echo $l[0]->detalhes();
        echo $l[1]->detalhes();
        echo $l[2]->detalhes();
    ?>
</body>
</html>