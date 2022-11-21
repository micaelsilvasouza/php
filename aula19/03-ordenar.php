<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h1>Vetores e Matrizes</h1>
    <div>
        <pre>
            <?php
                $v = array(4,5,9,8,2,1,10);
                echo "Normal<br>";
                print_r($v);

                echo "Crescente<br>";
                sort($v);
                print_r($v);
                
                echo "Decrescente<br>";
                rsort($v);
                print_r($v);

                $v = array(4,5,9,8,2,1,10);

                echo "Associativa<br>";
                asort($v);
                print_r($v);

                echo "Associativa Reversa<br>";
                arsort($v);
                print_r($v);

                echo "Ordena por Chaves(indices)<br>";
                ksort($v);
                print_r($v);

                echo "Ordem Reversa por Chaves(indices)<br>";
                krsort($v);
                print_r($v);
            ?>
        </pre>
    </div>
</body>
</html>