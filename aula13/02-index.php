<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetições Do While</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <h1>Repetições Do While</h1>
    <div>
        <form action="02-tabuada.php" method="get">
            <p>
                <label for="inum">Número:</label>
                <select name="num" id="inum">
                    <?php
                        for($i = 1; $i<=10; $i++){
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </p>
            <p>
                <input type="submit" value="Calcular">
            </p>
        </form>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>