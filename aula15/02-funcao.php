<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Externas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Função Externas</h1>
    <div>
        <p>Testado funções externas</p>
        <ul>
            <li>Includes: inclui um arquivo para usar suas funções, caso não acessivel continuará a ler o código.</li>
            <li>Require: requer um arquivo para usar suas funções, caso não acessivel para de ler o código</li>
            <li>Include_once e require_once: adiciona o arquivo apenas uma unica vez independe de quantas chamadas existi.</li>
        </ul>
        <?php
            include "funcoes.php";
            ola();
            mostraValor(8);
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>