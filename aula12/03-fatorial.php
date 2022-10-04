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
            $fat = $num;
            do{
                $num--;
                $fat *= $num;
                echo "$fat ";
            }while($num > 1);

            echo "O Fatorial é $fat."
        ?>
    </div>
    <a href="03-fatorial.html">Voltar</a>
    <p>Aprendendo PHP</p>
</body>
</html>