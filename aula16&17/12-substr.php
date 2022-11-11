<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Substr</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Substr</h1>
    <div>
        <p>Cria uma nova string apartir de outro, pegando primeiro o indecie de onde começa e depois o numero de caracteres que deseja.
        </p>
        <?php
            $frase = "Eu tenho namorada, não só uma, eu tenho três namorada, mas é tudo namorada de alugueu.";
            $sub = substr($frase, 0, 17);
            echo $sub;
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>