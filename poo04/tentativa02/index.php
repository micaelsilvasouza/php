<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Objeto</title>
    <?php require_once "conta.php";?>
</head>
<body>
    <h1>Conta bancarias</h1>
    <h2>Conta da Creuza</h2>
        <?php
            $c1 = new Conta("Creuza", "Cp");
            $c1->abrirConta();
            $c1->depositar(500);
            $c1->sacar(100);
            $c1->pagarMensal();
            echo $c1->getSaldo();
        ?>
</body>
</html>