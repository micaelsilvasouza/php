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
        $v1 = $_POST['v1']??0;
        $v2 = $_POST["v2"]??0;
        $p1 = $_POST["p1"]??1;
        $p2 = $_POST["p2"]??1;

        $ms = ($v1 + $v2) / 2;
        $mp = ($v1 * $p1  +  $v2 * $p2) / ($p1 + $p2);
    ?>

    <main>
        <h1>Média Aritimética</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>"method="post">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$p1?>">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$p2?>">
            <input type="submit" value="Calcular média">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?="$v1 e $v2"?>:</p>
        <ul>
            <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a <?= number_format($ms,2,",",".")?></li>
            <li>A <strong>Média Aritimética Pondenrada</strong> com os pesos <?="$p1 e $p2 é igual a ". number_format($mp, 2,",", ".")?></li>
        </ul>
    </section>
</body>
</html>