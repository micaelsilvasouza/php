<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruções Preparadas</title>
    <?php 
        $host = "localhost";
        $user = "root";
        $password = "";
    ?>
</head>
<body>
    <h1>Instruções preparadas e parâmetros vinculados</h1>
    <p>Uma instrução preparada é um recurso usado para executar o mesmo (ou semelhante) SQL declarações repetidamente com alta eficiência.</p>
    <p>As declarações preparadas funcionam basicamente assim:</p>
    <ol>
        <li>Preparar: um modelo de instrução SQL é criado e enviado ao banco de dados. Certos valores não são especificados, chamados parâmetros (rotulados "?"). Exemplo: INSERT INTO tabela VALUES(?, ?)</li>
        <li>O banco de dados analisa, compila e executa a otimização de consulta no modelo de instrução SQL e armazena o resultado sem executá-lo</li>
        <li>Executar: posteriormente, o aplicativo vincula os valores aos parâmetros e o banco de dados executa a instrução. O aplicativo pode executar a instrução quantas vezes quiser com valores diferentes</li>
    </ol>
    <p>Em comparação com a execução direta de instruções SQL, as instruções preparadas têm três vantagens principais:</p>
    <ul>
        <li>As instruções preparadas reduzem o tempo de análise, pois a preparação na consulta é feita apenas uma vez (embora a instrução seja executada várias vezes)</li>
        <li>Os parâmetros acoplados minimizam a largura de banda para o servidor, pois você precisa enviar apenas os parâmetros de cada vez, e não a consulta inteira</li>
        <li>As instruções preparadas são muito úteis contra injeções SQL, porque os valores de parâmetro, que são transmitidos posteriormente usando um protocolo diferente, não precisam ser escapados corretamente. Se o modelo de instrução original não for derivado de entrada externa, a injeção de SQL não poderá ocorrer.</li>
    </ul>

    <h2>Instruções preparadas em MySQLi</h2>
    <p>
        <?php
            $conn = new mysqli($host, $user, $password, "db_mysqli_ob");
            $stmt = $conn->prepare("INSERT INTO tabela (numero, caracteres) VALUES (?, ?)");
            $stmt->bind_param("is", $num, $car);
            /*
            $num = 159;
            $car = "To tirando onda de camaro amarelo.";
            $stmt->execute();

            $num = 445;
            $car = "Viver, e não ter a vergonha de ser feliz.";
            $stmt->execute();

            $num = 159;
            $car = "Cantar e cantar, a beleza de ser um eterno aprendiz.";
            $stmt->execute();
            */
            echo "Usando uma instrução preparada, novos dados foram inseridos na tabela.";

            $stmt->close();
            $conn->close();
        ?>
    </p>

    <p>A partir da varivel de conexão criamos uma nova variavel com o comando preparado: <code>$stmt = $conn->prepare("INSERT INTO tabela (numero, caracteres) VALUES (?, ?)");</code>Em nosso SQL, inserimos um ponto de interrogação (?) onde queremos substituir em um inteiro, string, double ou blob valor.</p>
    <p>Em seguida fizemos $stmt->bind_param("is", $num, $car); Essa função vincula os parâmetros à consulta SQL e informa ao banco de dados quais são os parâmetros. O argumento "is" lista o tipos de dados que os parâmetros são. O caractere s diz ao mysql que o parâmetro é uma cadeia de caracteres.</p>
    <p>Após a edição dos valores o comando <code>$stmt->execute()</code> é usado para executar o comando SQL com os novos valores.</p>
    <p>O argumento pode ser de quatro tipos:</p>
    <ul>
        <li>i - integer</li>
        <li>d - double</li>
        <li>s - string</li>
        <li>b - BLOB</li>
    </ul>
    <p>Temos de ter um destes para cada parâmetro. Ao dizer ao mysql que tipo de dados esperar, minimizamos o risco de injeções de SQL.</p>
    <p><strong>Nota:</strong> Se quisermos inserir quaisquer dados de fontes externas (como a entrada do usuário), é muito importante que os dados sejam higienizados e validados.</p>


    <h2>Instruções preparadas PDO</h2>
    <p>
        <?php 
            $conn = new PDO("mysql:host=$host;dbname=db_pdo", $user, $password);
            $stmt = $conn->prepare("INSERT INTO tabela (numero, caracteres) VALUES (:num, :carac)");
            $stmt->bindParam(":num", $num);
            $stmt->bindParam(":carac", $car);
            /*
            $num = 159;
            $car = "To tirando onda de camaro amarelo.";
            $stmt->execute();

            $num = 445;
            $car = "Viver, e não ter a vergonha de ser feliz.";
            $stmt->execute();

            $num = 159;
            $car = "Cantar e cantar, a beleza de ser um eterno aprendiz.";
            $stmt->execute();
            */
            echo "Usando uma instrução preparada, novos dados foram inseridos na tabela.";

            $conn = null
        ?>
    </p>

    <p>Da mesma forma quando usamos o mysqli, tambem criamos uma variavel com o comando preparado apartir da variavel de conexão: <code>$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");</code></p>
    <p>A diferença é que não usamos a interrogação mais sim nomes de referencia com dois pontos (:) no começo do nome de referencia</p>
    <p>
        Quando estivermos atribuindo as variaveis, usaremos o nome de referencia e a variavel cujo será usado para obter o valor, nesse caso é necessário usar o bind para cada nome referencidado no comando SQL.
        <pre>
            <code>
                $stmt->bindParam(':firstname', $firstname);
                $stmt->bindParam(':lastname', $lastname);
                $stmt->bindParam(':email', $email);
            </code>
        </pre>
    </p>

    <?php
        #execultando para o banco de dados db_mysqli_pr
        /*$conn = mysqli_connect($host, $user, $password, "db_mysqli_pr");
        $stmt = $conn->prepare("INSERT INTO tabela (numero, caracteres) VALUES (?, ?)");
        $stmt->bind_param("is", $num, $car);
        
        $num = 159;
        $car = "To tirando onda de camaro amarelo.";
        $stmt->execute();

        $num = 445;
        $car = "Viver, e não ter a vergonha de ser feliz.";
        $stmt->execute();

        $num = 159;
        $car = "Cantar e cantar, a beleza de ser um eterno aprendiz.";
        $stmt->execute();

        $stmt->close();
        mysqli_close($conn);*/
    ?>
</body>
</html>