<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $valor = 0;
        if($valor == 0){
            throw new Exception("O seu filho da puta é impossivel de dividir um número por zero, quer quebrar meu servidor seu vagabundo filho duma egua");
        }else{
            echo "<p>O valor 10 divdido $valor é igual a ". 10/$valor ."</p>";
        }
    ?>
</body>
</html>