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
        <form action="04-tabuada.php" method="get">
            <p>
                <label for="inum">Escolha um número</label>
                <select name="num" id="inum">
                    <?php
                        $c = 1;
                        do{
                            echo "<option value='$c'>$c</option>";
                            $c++;
                        }while($c<=10);
                    ?>
                </select>
            </p>
            <p>
                <input type="submit" value="Tabuada">
            </p>
        </form>
    </div>
    <p>Aprendendo PHP</p>
</body>
</html>


