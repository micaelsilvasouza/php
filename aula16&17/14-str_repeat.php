<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Str_repeat</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Str_repeat</h1>
    <div>
        <p>Repete uma string um numero determinado de vezes, retornado uma nova string com todas as repetições
        </p>
        <?php
            $repeat = str_repeat("lindo ", 10);
            echo "O Micael é $repeat demais";
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>