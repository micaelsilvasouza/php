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
        $anoAtual = date("Y");
        $nas = $_POST['nas']??2000;
        $ano = $_POST["ano"]??$anoAtual;
        $idade = $ano - $nas;
    ?>

    <main>
        <h2>Calculando sua idade</h2>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="nas">Em que ano você nasceu?</label>
            <input type="number" name="nas" id="nas" value="<?=$nas?>">
            <label for="ano">Quer saber a sua idade em qual ano? (atualmente estamos em <?=$anoAtual?>)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">
            <input type="submit" value="Qual será a idade?">
        </form>
    </main>

    <section>
        <h3>Resultado</h3>
        <p><?="Quem nas em $nas vai ter <strong>$idade anos</strong> em $ano"?></p>
    </section>
</body>
</html>