<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies PHP</title>
    <?php
        $criado = false;
        if(isset($_COOKIE["usuario"])){
            $criado = true;
        }
        elseif(isset($_POST["usu"]) and isset($_POST["sen"])){
            setcookie('usuario', $_POST["usu"], time() + 3600, "/");
            setcookie('senha', $_POST["sen"], time() + 3600, "/");
            $criado = true;
        }
    ?>
    <script>
        if("<?=$criado?>"){
            window.location = "suscook.php"
        }
    </script>
</head>
<body>
    <h1>Cookie 3</h1>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <fieldset>
            <legend>Login</legend>
            <div>
                <label for="usu">Usuario</label>
                <input type="text" name="usu" id="usu" required>
            </div>
            <div>
                <label for="sen">Senha</label>
                <input type="password" name="sen" id="sen" required>
            </div>
            <input type="submit" value="Entrar">
        </fieldset>
    </form>
</body>
</html>