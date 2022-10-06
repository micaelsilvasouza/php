<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetições for</title>
    <link rel="stylesheet" href="../estilo.css">
    <?php
            $num = $_GET["num"];
            $div = "";
            $tdiv = 0;
            for($i = 1; $i <= $num; $i++){
                if($num % $i == 0){
                    $div = $div. "$i ";
                    $tdiv++;
                }
            }
        ?>
</head>
<body>
    <h1>Repetições For</h1>
    <div>
        <h2 class="titulo">Analizando o numero <?php echo $num;?>...</h2>
        <span>Esses são todos os seus divisores <?php echo $div;?>.</span><br>
        <span>Ao todo são <?php echo $tdiv;?> divisores.</span><br>
        <span>
            Então esse número 
            <?php
                if($tdiv > 2){
                    echo "Não é Primo";
                }else{
                    echo "é Primo";
                }
            ?>
            .
        </span>
    </div>
    <a href="javascript: history.go(-1)">Voltar</a>
    <p>Aprendendo PHP</p>
</body>
</html>