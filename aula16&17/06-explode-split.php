<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explode</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Explode</h1>
    <div>
        <p>Explode cria uma divisão em uma string de acordo com o valor passado no primeiro argumento, sendo a string o segundo argumento, e cria uma array com essas divisões</p>
        <p>Split usa cada caractere de uma string como um item de uma array</p>
        <p>Uma função que funciona como o contrario do exlpode é o implode que pega um array no segundo argumento e junta eles com um caractere adicionado no primeiro argumento, funciona da mesma forma se usar join no lugar de implode</p>
        <?php
            $frase = "Curso em Video";
            $vetor = explode("e", $frase);
            print_r($vetor);
            echo "<br>";
            $nome = "Maria";
            $vetor = str_split($nome);
            print_r($vetor);
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>