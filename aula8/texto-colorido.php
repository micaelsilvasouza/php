<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="../estilo.css">
    <?php
        $texto = isset($_GET['txt'])? $_GET["txt"]:"Exemplo de texto";
        $tam = isset($_GET["tam"])? $_GET["tam"]:"14pt";
        $cor = isset($_GET["cor"])? $_GET["cor"]: "black"
    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;
        }
    </style>
</head>
<body>
    <h1>HTML E PHP</h1>
    <div>
        <?php
            echo "<span class='texto'>$texto</span>";
        ?>   
    </div>
    <a href="03-execicio.html">Voltar</a>
    <p>Apredendo PHP</p>
</body>
</html>