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
        $pre = $_POST["pre"]??0;
        $ajs = $_POST["ajs"]??0;

        $npre = $pre + ($pre * $ajs /100)
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="pre">Preço do Prduto (R$)</label>
            <input type="number" name="pre" id="pre" value="<?=$pre?>">
            <label for="ajs">Qual será o percentual do raajuste?(<output id="output"><?=$ajs?>%</output>)</label>
            <input oninput="output.innerHTML = this.value + '%'" type="range" name="ajs" id="ajs" value="<?=$ajs?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($pre, 2,",",".")?>, com <strong><?=$ajs?>% de aumento</strong> vai passar a curtar <strong>R$<?=number_format($npre, 2,",", ".")?></strong> a partir de agora</p>
    </section>
</body>
</html>