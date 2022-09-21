<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h1>HTML E PHP</h1>
    <div>
        <?php
            $valor = $_GET["val"];
            $raiz = sqrt($valor);
            
            echo "O valor recebido foi $valor e sua raiz quadrada é ". number_format($raiz, 2);
        ?>

        <a href="01-execicio.html">Voltar</a>
    </div>
    <p>Apredendo PHP</p>
</body>
</html>