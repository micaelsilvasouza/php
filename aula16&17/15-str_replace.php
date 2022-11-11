<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Str_replace</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Str_replace</h1>
    <div>
        <p>Troca um pedaço da string por outro, ao colocar um i antes do replace ignora qualquer diferenca entre maisculas e minusculas</p>
        <?php
            $frase = "Eu quero te amar para sempre";
            $nova = str_replace("amar", "odiar", $frase);
            echo $nova;
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>