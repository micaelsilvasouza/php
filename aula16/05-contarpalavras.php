<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Palavras</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Contar Palavras</h1>
    <div>
        <p>A função str_word_count() serve para contar a quantidade de Palavras em um string, precisa ter dois argumentos, uma string e um dos números 0,1,2. O zero mostra a quantidades de palavras, o um cria uma array com essas palavras, e o dois também cria uma array e colocas as palavras nos indices em que se encotram na string.</p>
        <?php
            $frase = "Eu tenho uma namorada.";
            $cont = str_word_count($frase,0);
            print($cont)
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>