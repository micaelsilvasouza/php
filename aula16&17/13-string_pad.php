<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Str_pad</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Str_pad</h1>
    <div>
        <p>Pega um string e faz ela caber em um determindo espaço, por exemplo uma string tem 9 caracteres, para caber em 15 ela acrescenta algo que voce passou como parametro, a string pode ficar a direita, centro e esquerda, de acordo com o ultimo parametro
        </p>
        <?php
            $nome = "Josnei";
            $novo = str_pad($nome,15,"-", STR_PAD_RIGHT);
            echo "Olá, meu nome é $novo, cade você? Eu vim aqui só pra te ver.";
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>