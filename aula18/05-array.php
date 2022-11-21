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
        <?php
            $a = array(
                array(3,4),
                array(4,5),
                array(3,6),
                array(8,1)
            );
            $a[0][2] = "SEM ARRAY";
            print_r($a[0])
            
        ?>
    </div>
</body>
</html>