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
            $c = 1;
            do{
                echo ($num * $c). "<br>";
                $c++;
            }while($c <= 10);
        ?>
    </div>
    <a class="button" href="04-num-tab.php">Voltar</a>
    <p>Aprendendo PHP</p>
</body>
</html>