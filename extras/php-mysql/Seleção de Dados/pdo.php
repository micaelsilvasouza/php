<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de dados</title>
    <?php require_once "dados-conexao.php"?>
</head>
<body>
<h1>Seleção de dados PDO</h1>
    <p>Dados tabela do banco de dados:</p>
    <ul>
        <?php 
            try {
                $conn = new PDO("mysql:host=$host;dbname=$pdo", $user, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "<li>Falha na conexão com o banco de dados</li>";
            }

            try{
                $stmt = $conn->prepare("SELECT * FROM tabela");
                $stmt->execute();
                $res = $stmt->fetchAll();
                foreach ($res as $linha) {
                    echo "<li>ID: $linha[0] - NUMERO: $linha[1] - CARACTERES: $linha[2]</li>";
                }
            }catch(PDOException $e){
                echo $e->getMessage();
            }

            $conn = null;
        ?>
    </ul>
</body>
</html>