<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trim</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Trim</h1>
    <div>
        <p>Elimina espaços desnecessários antes e depois da estring pricipal, possui duas variações: ltrim() elimina os caracteres antes da principal e deixa os que ficam depois dela, e o rtrim() que funcina de maneira oposta ao ltrim.</p>
        <?php
            $nome = "   Micael da Silva  ";
            echo (strlen($nome));
            echo "<br>";
            $novo = trim($nome);
            echo ($novo);
            echo "<br>";
            echo (strlen($novo))
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>