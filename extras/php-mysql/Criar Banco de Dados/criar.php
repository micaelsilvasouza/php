<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar banco de dados</title>
    <?php 
        $host = "localhost";
        $user = "root";
        $password = "";
    ?>
</head>
<body>
    <h1>Criar banco de dados</h1>
    <p>A instrução CREATE DATABASE é usada para criar um banco de dados no MySQL.</p>

    <h2>MySQLi (Orientado a Objetos)</h2>
    <p>Criando banco de dados chamado db_mysqli_ob: $conn->query("CREATE DATABASE db_mysqli_ob")</p>
    <p>
        Resultado: 
        <?php 
            $conn1 = new mysqli($host, $user, $password);
            if ($conn1->connect_error) {
                die("Erro na conexão com o mysql: ". $conn1->connect_error);
            }

            $sql = "CREATE DATABASE db_mysqli_ob";

            if ($conn1->query($sql) === true) {
                echo "Banco de dados criado com sucesso";
            }else{
                echo "Erro na criação do banco de dados, pode já ter sido criado: ". $conn1->error;
            }

            $conn1 -> close()
        ?>
    </p>
    <p>
        <strong>Nota:</strong> Ao criar um novo banco de dados, você deve especificar apenas Os três primeiros argumentos para o objeto MySQLI (servername, username e senha).
        <br>
        <strong>Dica:</strong> Se você tiver que usar uma porta específica, Adicione uma cadeia de caracteres vazia para o argumento database-name, como este: new mysqli("localhost", "nome de usuário", "senha", "", porta)
    </p>

    <h2>MySQLi (Procedural)</h2>
    <p>Criando banco de dados chamado db_mysqli_pr: mysqli_query($conn, "CREATE DATABASE db_mysqli_pr")</p>
    <p>
        Resultado:
        <?php 
            $conn2 = mysqli_connect($host, $user, $password);

            if(!$conn2){
                die("Conexão não realizada");
            }

            $sql = "CREATE DATABASE db_mysqli_pr";

            if(mysqli_query($conn2, $sql)){
                echo "Banco de dados criado com sucesso.";
            }else{
                echo "Não foi possivel criar o banco de dados". mysqli_error($conn2);
            }

            mysqli_close($conn2)
        ?>
    </p>

    <h2>PDO</h2>
    <p>Criando banco de dados chamado db_pdo: $conn->exec("CREATE DATABASE db_pdo")</p>
    <p>
        Resultado: 
        <?php 
            try{
                $conn3 = new PDO("mysql:host=$host", $user, $password);
                $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "CREATE DATABASE db_pdo";
                $conn3->exec($sql);
                
                echo "Banco de dado criado com sucesso.";
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }

            $conn3 = null;
        ?>
    </p>
    <p>
        <strong>Ponta:</strong> Um grande benefício do PDO é que ele tem classe de exceção para lidar com quaisquer problemas que possam ocorrem em nossas consultas de banco de dados. Se uma exceção for lançada dentro do bloco try{ }, O script pára de ser executado e flui diretamente para o primeiro bloco catch(){ }. No bloco de captura acima, ecoamos a instrução SQL e A mensagem de erro gerada.
    </p>
</body>
</html>