<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Tabela</title>
    <?php 
        $host = "localhost";
        $user = "root";
        $password = "";

        $sql = "CREATE TABLE tabela(
            id INT AUTO_INCREMENT PRIMARY KEY,
            numero INT NOT NULL,
            caracteres VARCHAR(100) NOT NULL
        );";
    ?>
</head>
<body>
    <h1>Criando Tabela</h1>
    <p>Usando todas as formas para acessar o banco de dados, e em todos os bancos de dados que foram criados, criaremos uma tabela chamada 'tabela', usando o sequite comondo sql:</p>
    <pre>
    <code>
        CREATE TABLE tabela(
            id INT AUTO_INCREMENT PRIMARY KEY,
            numero INT NOT NULL,
            caracteres VARCHAR(100) NOT NULL
        );
    </code>
    </pre>
    <h2>MySQLi (Orientado a Objetos)</h2>
    <p>Para cria uma tabela usamos o comando: $conn->query($sql), onde $conn é o objeto da conexão e $sql é uma string contendo o comando acima</p>
    <p>
        Criação da tabela 
        <?php 
            try {
                $conn1 = new mysqli($host, $user, $password, "db_mysqli_ob");
            } catch (Exception $e) {
                echo "falha ao conectar.";
            }

            try {
                $conn1->query($sql);
                echo "foi realizada com sucesso.";
            } catch (Exception $e) {
                echo "não foi bem sucedida, pode já ter sido criada. <br>";
                echo $e->getMessage();
            }

            $conn1->close();
        ?>
    </p>

    <h2>MySQLi (Procedural)</h2>
    <p>Para cria uma tabela usamos o comando: mysqli_query($conn, $sql), onde $conn é o objeto da conexão e $sql é uma string contendo o comando acima</p>
    <p>
        Criação da tabela 
        <?php 
            try {
                $conn2 = mysqli_connect($host, $user, $password, "db_mysqli_pr");
            } catch (Exception $e) {
                echo "falha ao conectar.";
            }

            try {
                mysqli_query($conn2, $sql);
                echo "foi realizada com sucesso.";
            } catch (Exception $e) {
                echo "não foi bem sucedida, pode já ter sido criada. <br>";
                echo $e->getMessage();
            }

            mysqli_close($conn2);
        ?>
    </p>

    <h2>PDO</h2>
    <p>Para cria uma tabela usamos o comando: $conn->exec($sql), onde $conn é o objeto da conexão e $sql é uma string contendo o comando acima.</p>
    <p>
        Criação da tabela 
        <?php 
            try {
                $conn3 = new PDO("mysql:host=$host;dbname=db_pdo", $user, $password);
                $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "falha ao conectar.";
            }

            try {
                $conn3->exec($sql);
                echo "foi realizada com sucesso.";
            } catch (PDOException $e) {
                echo "não foi bem sucedida, pode já ter sido criada. <br>";
                echo $e->getMessage();
            }
        ?>
    </p>
</body>
</html>