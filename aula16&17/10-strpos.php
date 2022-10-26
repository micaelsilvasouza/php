<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StrPos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>StrPos</h1>
    <div>
        <p>Retorna a posição onde determinada string começa em uma outra, só que não é capaz de diferenciar minusculas de maisuculas</p>
        <p>stripos ignora gualquer diferensa entre as strings.</p>
        <?php
            $str = "Eu tenho uma namorada";
            $pos = strpos($str, "namorada");
            $pos2 = stripos($str, "UMa");
            echo "$str <br>A string foi encontrada na posiçõa $pos<br>";
            echo "Mesmo perguntando em maisculas a posição será $pos2"
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>