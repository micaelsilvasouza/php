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
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[não imformado]";
            $ano = isset($_GET["ano"])?$_GET["ano"]: date("Y");
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sexo indefinido]";
            $idade = date("Y") - $ano;

            echo "$nome é $sexo e tem $idade";
        ?>
    </div>
    <a href="02-execicio.html">Voltar</a>
    <p>Apredendo PHP</p>
</body>
</html>