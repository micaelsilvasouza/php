<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Dados</title>
    <?php 
        $host = "localhost";
        $user = "root";
        $password = "";

        $sql = "INSERT INTO tabela (numero, caracteres) VALUES 
            (114, 'O meu gato é bonitinho.'),
            (555, 'Não sou cachorro não para viver tão humilhado.'),
            (999, 'Tá osso, sobreviver o seu amor tá osso.'),
            (789, 'Tudo o que eu quero é você de volta.'),
            (157, 'Hoje eu sou ladrão, artigo 157, as cachoras me amam e os playboy se derrete.'),
            (469, 'Posso ser tudo o que você quiser.'),
            (458, '1 2 3, testando...'),
            (775, 'Ei boy, fica ai babando no quão foda eu sou.'),
            (223, 'Chora, me liga, me emplora meu beijo denovo.'),
            (224, 'Me pede socorro, que sabe eu vou até ai te salvar.')
        ";
    ?>
</head>
<body>
    <h1>Inserir Dados</h1>
    <p>Aqui estão algumas regras de sintaxe a serem seguidas:</p>
    <ul>
        <li>A consulta SQL deve ser citada em PHP</li>
        <li>Os valores de cadeia de caracteres dentro da consulta SQL devem ser cotados</li>
        <li>Os valores numéricos não devem ser citados</li>
        <li>A palavra NULL não deve ser citada</li>
    </ul>

    <h2>MySQLi (Orientado a Objetos)</h2>
    <p>Para inserir os dados usamos o comando: $conn->query($sql), onde $conn é o objeto de conexão ao banco de dados, e $sql o comando sql em formato string.</p>
    <p>
        Os dados 
        <?php 
            try {
                $conn1 = new mysqli($host, $user, $password, "db_mysqli_ob");
            } catch (Exception $e) {
                echo "<br>Falha na conexão.<br>";
                echo $e->getMessage();
            }

            try {
                #$conn1->query($sql); ESSES DADOS JÁ FORMA INSERIDO, PARA NÃO REINSERIR AO ATUALIZAR DEIXE COMENTDADO.
                echo "forão inseridos com sucesso.";
            } catch (Exception $e) {
                echo "não forma inseridos com sucesso.<br>";
                echo $e->getMessage();
            }

            $conn1->close();

            #comandos opcionais:
            #$conn1->multi_query($sql): quando o $sql, possui muitos comandos juntos;
            #$conn1->insert_id: id do ultimo dado inserido;
        ?>
    </p>
    
    <h2>MySQLi (Procedural)</h2>
    <p>Para inserir os dados usamos o comando: mysqli_query($conn, $sql), onde $conn é o objeto de conexão ao banco de dados, e $sql o comando sql em formato string.</p>
    <p>
        Os dados 
        <?php 
            try {
                $conn2 = mysqli_connect($host, $user, $password, "db_mysqli_pr");
            } catch (Exception $e) {
                echo "<br>Falha na conexão.<br>";
                echo $e->getMessage();
            }

            try {
                #mysqli_query($conn2, $sql); #ESSES DADOS JÁ FORMA INSERIDO, PARA NÃO REINSERIR AO ATUALIZAR DEIXE COMENTDADO.
                echo "forão inseridos com sucesso.";
            } catch (Exception $e) {
                echo "não forma inseridos com sucesso.<br>";
                echo $e->getMessage();
            }

            mysqli_close($conn2);

            #comandos opcionais:
            #mysqli_multi_query($conn,$sql): quando o $sql, possui muitos comandos juntos;
            #mysqli_insert_id($conn): id do ultimo dado inserido;
        ?>
    </p>
    
    <h2>PDO</h2>
    <p>Para inserir os dados usamos o comando: $conn-&gt;exec($sql), onde $conn é o objeto de conexão ao banco de dados, e $sql o comando sql em formato string.</p>
    <p>
        Os dados 
        <?php 
            try {
                $conn3 = new PDO("mysql:host=$host;dbname=db_pdo", $user, $password,);
                $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                echo "<br>Falha na conexão.<br>";
                echo $e->getMessage();
            }

            try {
                #$conn3->exec($sql); #ESSES DADOS JÁ FORMA INSERIDO, PARA NÃO REINSERIR AO ATUALIZAR DEIXE COMENTDADO.
                echo "forão inseridos com sucesso.";
            } catch (Exception $e) {
                echo "não forma inseridos com sucesso.<br>";
                echo $e->getMessage();
            }

            $conn3 = null;

            #comandos opcionais:
            #$conn->commit(): apos usar varios comandos sql seguidos;
            #$conn->lastInsertId(): id do ultimo dado inserido;
        ?>
    </p>
</body>
</html>