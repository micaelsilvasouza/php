<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de dados</title>
    <?php require_once "dados-conexao.php"?>
</head>
<body>
<h1>Seleção de dados MySQLi (procedural)</h1>
    <p>Dados tabela do banco de dados:</p>
    <ul>
        <?php 
            try {
                $conn = mysqli_connect($host, $user, $password, $mysqlipr);
            } catch (Exception $e) {
                echo "<li>Falha na conexão com o banco de dados</li>";
            }

            try {
                $resul = mysqli_query($conn, "SELECT * FROM tabela");
                if(mysqli_num_rows($resul) > 0){#Verifica o numero de linhas
                    /*
                    print_r(mysqli_fetch_assoc($resul)); Retorna uma linha por vez, linha 1
                    print_r(mysqli_fetch_assoc($resul)); linha 2, e assim por diante
                    */
                    while ($linha = mysqli_fetch_assoc($resul)) { #Uma matriz com os resultados
                        echo "<li>ID: ".$linha['id']." -  NUMERO: ".$linha['numero']." -  CARACTERES: ",$linha["caracteres"]."</li>";
                    }
                }
            } catch (Exception $e) {
                echo "Falha na solicitação <br>". $e->getMessage(); 
            }

            mysqli_close($conn);
        ?>
    </ul>
</body>
</html>