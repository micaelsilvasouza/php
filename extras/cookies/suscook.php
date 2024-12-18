<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscook PHP</title>
    
</head>
<body>
    <pre>
<?php 
var_dump($_COOKIE);

if(count($_COOKIE) >= 0){
    echo "tem";
}else{
    echo "nenhum cadastrado";
}
?>   
    </pre>
    <form action="cook001.php" method="post">
        <input type="text" style="display: none;" name="del">
        <input type="submit" value="Fazer LogOut">
    </form>
</body>
</html>