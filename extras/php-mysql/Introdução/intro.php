<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySql</title>
</head>
<body>
    <h1>Introdução</h1>
    <p>PHP 5 e posterior pode trabalhar com um banco de dados MySQL usando:</p>
    <ul>
        <li>Extensão MySQLi (o "i" significa melhorado): funcionará apenas trabalhar com bancos de dados MySQL.</li>
        <li>PDO (Objetos de dados PHP): funcionará em 12 sistemas de banco de dados diferentes.</li>
    </ul>
    <p>Então, se você tiver que mudar seu projeto para usar outro banco de dados, o PDO facilita o processo. Você só tem para alterar a cadeia de conexão e algumas consultas. Com o MySQLi, você precisará para reescrever o código inteiro - consultas incluídas. <br>
    Ambos são orientados a objetos, mas o MySQLi também oferece uma API de procedimento. <br>
    Ambos apoiam as Declarações Preparadas. Declarações preparadas protegem de injeção de SQL e são muito importantes para a segurança de aplicativos Web.</p>
    <p>Para Linux e Windows: A extensão MySQLi é instalada automaticamente em Na maioria dos casos, quando o pacote mysql php5 está instalado.</p>
    <p>Para obter detalhes da instalação do PDO, <a href="http://php.net/manual/en/pdo.installation.php" target="_blank">acesse aqui</a></p>
    <p>Caso usando o xampp siga as etapas:</p>
    <p>1 - Abra o arquivo php.ini localizado em C:\xampp\php\php.ini.</p>
    <p>2 - Adicione as seguintes linhas ao final do arquivo:</p>
    <p>
        extension=php_pdo.dll <br>
        extension=php_pdo_firebird.dll <br>
        extension=php_pdo_informix.dll <br>
        extension=php_pdo_mssql.dll <br>
        extension=php_pdo_mysql.dll <br>
        extension=php_pdo_oci.dll <br>
        extension=php_pdo_oci8.dll <br>
        extension=php_pdo_odbc.dll <br>
        extension=php_pdo_pgsql.dll <br>
        extension=php_pdo_sqlite.dll
    </p>
    <p>Certifique-se de que essas DLLs existam no diretório de extensões (extension_dir) do sistema. Lembre-se de reiniciar o PHP após fazer alterações no arquivo php.ini para que as novas configurações entrem em vigor.</p>
    <p>Após seguir essas etapas, reinicie o XAMPP para que as alterações tenham efeito.</p>

    <h1>Testando conexões</h1>
    <h2>MySQLi (Orientado a Objetos)</h2>
    <p>Resultado da conexão: 
        <?php 
            #Dados para a conexão
            $host = "localhost";
            $user = "root";
            $password = "";
            #gerando conexa
            $conn1 = new mysqli($host, $user, $password);
            #testando a conexão
            if($conn1->connect_error){
                die("Falha na conexão - ". $conn1->connect_error);
            }
            echo "Conexão bem sucedida.";
        ?>
    </p>
    <p>Para realizar o fechameto da conexão use: $conn->close() <?php $conn1->close()?></p>

    <h2>MySQLi (Procedural)</h2>
    <p>Resultado da conexão:
        <?php 
            #gerando conexão com os dados já criado anteriormente
            $conn2 = mysqli_connect($host, $user, $password);
            #testando conexão
            if(!$conn2){
                die("Falha na conexão - ".  mysqli_connect_error());
            }
            echo "Conexão bem sucedida."
        ?>
    </p>
    <p>Para realizar o fechameto da conexão use: mmysqli_close($conn) <?php mysqli_close($conn2)?></p>

    <h2>PDO</h2>
    <p>Resultado da conexão:
        <?php 
            #gerando conexão
            try{
                $conn3 = new PDO("mysql:host=$host;dbname=bd_python", $user, $password);
                #Configurando modo para exeção
                $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexão bem sucedida.";
            }catch(PDOException $e){
                echo "Falha na conexão - ". $e->getMessage();
            }
        ?>
    </p>
    <p>
    <strong>Nota:</strong> No exemplo de PDO acima, também especificamos um banco de dados (myDB). As PDO requerem uma base de dados válida para se conectar. Se nenhum banco de dados for especificado, uma exceção será lançada.
    <br>
    <strong>Ponta:</strong> Um grande benefício da PDO é que ela tem uma classe de exceção para lidar com quaisquer problemas que possam ocorrem em nossas consultas de banco de dados. Se uma exceção for lançada dentro do bloco try{ }, O script pára de ser executado e flui diretamente para o primeiro bloco catch(){ }.
    </p>
    <p>Para realizar o fechameto da conexão use: $conn = null <?php $conn3 = null?></p>
</body>
</html>