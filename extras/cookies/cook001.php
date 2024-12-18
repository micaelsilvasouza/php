<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies PHP</title>
    <?php
        $cookie_name = "usuario";
        $cookie_value = "Clrin";
        $cookie_senha = "senha";
        setcookie($cookie_name, $cookie_value, time() - (86400), "/"); // 86400 = 1 day
        setcookie($cookie_senha, $cookie_value, time() - (86400), "/"); // 86400 = 1 day
    ?>
    <?php
        //var_dump($_SERVER)
        if(isset($_POST["del"])){
            setcookie($cookie_name, $cookie_value, time() - (86400), "/"); // 86400 = 1 day
            setcookie($cookie_senha, $cookie_value, time() - (86400), "/"); // 86400 = 1 day

            echo "<script>
                window.location = 'cook003.php'
            </script>";
        }
    ?>
</head>
<body>
    <h1>Cookie 1</h1>
    <pre>
       <?php
            if(!isset($_COOKIE[$cookie_name])) {
                echo "Cookie named '" . $cookie_name . "' is not set!";
            } else {
                echo "Cookie '" . $cookie_name . "' is set!<br>";
                echo "Value is: " . $_COOKIE[$cookie_name];
                echo"<br>";
            }

            var_dump($_COOKIE)
        ?> 
    </pre>
    <a href="suscook.php" target="_blank" rel="noopener noreferrer">Pagina de Sucesso</a>

    <pre>
        
    </pre>
</body>
</html>