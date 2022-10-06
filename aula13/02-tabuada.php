<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetições Do While</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h1>Repetições Do While</h1>
    <div>
        <?php
            $num = $_GET["num"];
            for($i = 1; $i <= 10; $i++){
                $res = $i * $num;
                echo "$num X $i = $res <br>";
            }
        ?>
    </div>
    <a href="javascript: history(-1)"></a>
    <p>Aprendendo PHP</p>
</body>
</html>