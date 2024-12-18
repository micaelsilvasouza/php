<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Arquivos PHP</title>
</head>
<body>
    <h1>Manipulando texto de um arquivo externo</h1>
    <h2>Fução readfile</h2>
    <strong>
        <p>Permite acessar o conteudo de um arquivo</p>
    </strong>
    <p>
        <?php
            readfile("texto.txt");
            echo "<br><br>";
            echo readfile("texto.txt");
        ?>
    </p>

    <h2>Função fopen, fread, fclose</h2>
    <strong>
        <p>Basicamente fazem as mesma coisa que a readfile porem permite outras coisas a mais</p>
    </strong>

    <?php 
        $texto = fopen("texto.txt", "r");
        echo fread($texto,21). "<br><br>";
        echo filesize("texto.txt");
        fclose($texto);
    ?>

    <h2>Função fgets</h2>
    <strong><p>Retorna apenas uma linha do arquivo por vez</p></strong>
    <?php 
        $texto = fopen("texto.txt", "r");
        echo "<strong>Primeira linha: </strong>";
        echo fgets($texto);
        echo "<br><strong>Segunda linha:</strong> ";
        echo fgets($texto);
        fclose($texto)
    ?>

    <h2>Função fgetc</h2>
    <p><strong>Retorna apenas um caracterer do arquivo por vez</strong></p>
    <?php 
        $texto = fopen("texto.txt", "r");
        for($i = 1; $i<=6;$i++){
            echo "$i ". fgetc($texto)."<br>";
        }
        fclose($texto);
    ?>

    <h2>Função feof</h2>
    <p><strong>Verifica se o fim do arquivo foi alcançado</strong></p>
    <?php 
        $texto = fopen("texto.txt", "r");
        while (!feof($texto)){
            echo fgets($texto)."<br>";
        }
        fclose($texto);
    ?>
</body>
</html>