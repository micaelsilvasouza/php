<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_POST["num"]??64;
        $raizq = sqrt($num);
        $raizc = $num ** (1/3);
    ?>

    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>"method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o <strong>número <?=$num?></strong>, temos:</p>
        <ul>
            <li>A sua raíz quadrada é <strong><?=number_format($raizq, 3, ",", ".")?></strong></li>
            <li>A sua raíz cúbica é <strong><?=number_format($raizc, 3, ",", ".")?></strong></li>
        </ul>
    </section>
</body>
</html>