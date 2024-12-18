<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de dados</title>
    <?php require_once "dados-conexao.php";?>
</head>
<body>
    <h1>Seleção de dados MySQLi (orientado a objetos)</h1>
    <p>Dados tabela do banco de dados:</p>
    <ul>
        <?php 
            try {
                $conn = new mysqli($host, $user, $password, $mysqliob);
            } catch (Exception $e) {
                echo "<li>Falha na conexão com o banco de dados</li>";
            }

            try {
                $resul = $conn->query("SELECT * FROM tabela");
                if($resul->num_rows > 0){#Verifica o numero de linhas
                    /*
                    print_r($resul->fetch_assoc()); Retorna uma linha por vez, linha 1
                    print_r($resul->fetch_assoc()); linha 2, e assim por diante
                    */
                    while ($linha = $resul->fetch_assoc()) { #Uma matriz com os resultados
                        echo "<li>ID: ".$linha['id']." -  NUMERO: ".$linha['numero']." -  CARACTERES: ",$linha["caracteres"]."</li>";
                    }
                }
            } catch (Exception $e) {
                echo "Falha na solicitação <br>". $e->getMessage(); 
            }

            $conn->close();
        ?>
    </ul>
</body>
</html>