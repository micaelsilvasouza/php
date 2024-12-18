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
        $atual = date("Y");
        $nasc = $_GET["nasc"]??2000; 
        $ano = $_GET["ano"] ?? $atual;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>"method="get">
            <label for="nasc">Em que ano você nasceu</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual-1?>" value="<?=$nasc?>">
            <label for="ano">Quer saber a sua idade em qual ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="nao" min="1900" value="<?=$ano?>">
            <input type="submit" value="Qual será a sua idade?">
        </form>
    </main>

    <?php 
        $idade = $ano - $nasc
    ?>

    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai tem <strong><?=$idade?> anos</strong> em <?=$ano?></p>
    </section>
</body>
</html>