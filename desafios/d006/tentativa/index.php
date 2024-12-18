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
        $divs = $_GET["ds"]??1;
        $divn = $_GET["dn"]??0;
        $res = $divn % $divs;
        $div = (int) ($divn / $divs);
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>"method="get">
            <label for="dn">Dividendo</label>
            <input type="number" name="dn" id="dn" value="<?=$divn?>">
            <label for="ds">Divisor</label>
            <input type="number" name="ds" id="ds" value="<?=$divs?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <table class="divisao">
                <tr>
                    <td><?=$divn?></td>
                    <td><?=$divs?></td>
                </tr>

                <tr>
                    <td><?=$res?></td>
                    <td><?=$div?></td>
                </tr>
        </table>
    </section>
</body>
</html>