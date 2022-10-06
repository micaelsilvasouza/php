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
            for($i = 1; $i<=10; $i++){
                echo "$i ";
            }
            echo "<br>";

            for($i = 10; $i >= 1; $i--){
                echo "$i ";
            }
            echo "<br>";

            for($i = 0; $i <= 50; $i+=5){
                echo "$i ";
            }

            echo "<br>";

            for($i = 30; $i >=0; $i-=2){
                print "$i ";
            }
        ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>