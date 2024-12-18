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
        $sam = 1320;
        $sal = $_POST["sa"]?? $sam;
        $res = (int) ($sal / $sam);
        $sob = $sal % $sam;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>"method="post">
            <label for="sa">Salário (R$)</label>
            <input type="number" name="sa" id="sa" step="0.01" value="<?=$sal?>">
            <p>Considerando o salário minimo de R$1.320,00</p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resutado Final</h2>
        <p>Uma pessoa que recebe um salário de R$<?= number_format ($sal, 2, ",", ".")?> ganha <strong><?=$res?> salários minimos</strong> + R$<?=number_format($sob, 2,',','.')?></p>
    </section>
</body>
</html>