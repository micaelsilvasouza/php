<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Objeto</title>
</head>
<body>
    <h1>Conta Bancaria</h1>
    <?php
        require_once "conta.php";
        $c1 = new ContaBanco();
        $c1->abrirConta("CC");
        $c1->setNumConta("10-503.669-09");
        $c1->setdono("Jubileu");
    ?>
    <h2>Conta do Jubileu:</h2>
    <pre>
        <?php
            print_r($c1);
        ?>
    </pre>
    <p>
        Jublieu pagou a mensalidade da conta e ficou um saldo de 
        <?php
            $c1->pagarMensal();
            echo $c1->getSaldo();
        ?>
        reais na sua conta.
    </p>
    <p>
        Jubileu fez um deposito de 300 reais na sua conta, seu saldo atual é de
        <?php
            $c1->depositar(300);
            echo $c1->getSaldo();
        ?>
        reais.
    </p>
    <p>
        Jublieu precisa de dinheiro e vai fazer um saque na sua conta, mas ele quer deixar o minimo de dinhiero para poder pagar a proxima mensalidade. Quando Jubileu deve sacar?
    </p>
    <p>
        <Strong>
            Jubileu vai poder sacar 
            <?php
                $c1->pagarMensal();
                echo $c1->getSaldo();
            ?>
        </Strong>
    </p>
</body>
</html>