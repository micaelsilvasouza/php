<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Substr_count</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Substr_count</h1>
    <div>
        <p>Conta quantas vezes uma string aparece dentro de outra
        </p>
        <?php
            $frase = "Eu tenho namorada, não só uma, eu tenho três namorada, mas é tudo namorada de alugueu.";
            $cont = substr_count($frase, "namorada");
            echo "A palavra namorada apareceu $cont vezes.";
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>