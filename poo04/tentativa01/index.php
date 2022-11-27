<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Objeto</title>
</head>
<body>
    <?php
        require_once "conta.php";

        print "<h1>Conta 1:</h1>";
        $c1 = new Conta("Jubileu", "POUPANÇA","0158", 0);
        print "<p>{$c1->getDono()} tem uma conta do tipo {$c1->getTipo()} e nela tem {$c1->getSaldo()} reais de saldo</p>";
        $c1->depositar(300);

        echo "<h1>Conta 2:</h1>";
        $c2 = new Conta("Creuza", "CORRENTE","5620", 0);
        print "<p>{$c2->getDono()} tem uma conta do tipo {$c2->getTipo()} e nela tem {$c2->getSaldo()} reais de saldo</p>";
        $c2->depositar(500);
        $c2->sacar("5620",100);
    ?>
</body>
</html>