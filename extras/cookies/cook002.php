<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies PHP </title>
    <?php 
        $nome = $_GET["nome"]??0;
        $valor = $_GET["valor"]??0;

        if($nome){
            setcookie($nome, $valor, time() + 86400, "/");
        }
    ?>
</head>
<body>
    
    <h1>Cookie 2</h1>
    <p>Sem espaços em branco no nome</p>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="get" target="_self" autocomplete="off">
        <div>
            <label for="nome">Nome do Cookie</label>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div>
            <label for="valor">Valor do Cookie</label>
            <input type="text" name="valor" id="valor" required>
        </div>
        <input type="submit" value="Criar Cookies">
    </form>
    <p>Cookies criados:</p>
    <ul>
        <?php
            //var_dump($_COOKIE);
            foreach(array_keys($_COOKIE) as $cookie){
                echo "<li>$cookie: $_COOKIE[$cookie]</li>" ;
            }
        ?>
    </ul>
    <p>Atualize a pagina depois de criar</p>
</body>
</html>