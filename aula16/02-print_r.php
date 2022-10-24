<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print_r</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Print_r</h1>
    <div>
        <p>Imprime os falores de uma array em formato teste, mostrando os indices de cada valor, funções associadas: var_dump() e var_export()</p>
        <?php
            $v[0] = 4;
            $v[1] = 3;
            $v[2] = 2;
            echo "teste1: ";
            print_r($v);
            echo "<br> teste2: ";
            $v1 = array(5,4,3,2,1,0);
            var_export($v1)
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>