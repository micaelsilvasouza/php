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
        $din = $_POST["din"]??0;

        $n100 = intdiv($din, 100);
        $n5 = $din % 100;

        $n50 = intdiv($n5, 50);
        $n5 %= 50;

        $n10 = intdiv($n5, 10);
        $n5 %= 10;
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="din">Qual valor deseja sacar? (R$)</label>
            <input type="number" name="din" id="din" value="<?=$din?>" step="5">
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de <?=number_format($din, 2,",",".")?> realisado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li>R$100 X <?=$n100?></li>
            <li>R$50 X <?=$n50?></li>
            <li>R$10 X <?=$n10?></li>
            <li>R$5 X <?=$n5?></li>
        </ul>
    </section>
</body>
</html>