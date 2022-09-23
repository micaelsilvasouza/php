<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dirigir e Votar</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h1>Diirgir e Votar</h1>
    <div>
        <?php
            $ano = $_GET["ano"];
            $idade = date("Y") - $ano;
            echo "Você nasceu em $ano e tem $idade anos de idade.<br>";
            if($idade >= 18){
                echo "Você pode dirigir.";
            } else{
                echo "Você não pode dirigir.";
            }

            if($idade < 16){
                echo "Você não pode votar.";
            }else if(($idade >= 16 && $idade <18) || ($idade > 65)){
                echo " Seu voto é opcional.";
            }else{
                echo " Seu voto é obrigatório.";
            }
    ?>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>