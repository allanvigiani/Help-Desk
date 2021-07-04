<?php 

    if(!empty($_POST['email']) && !empty($_POST['senha'])) {
        
        $dsn = "pgsql:host=localhost; port=5432; dbname=php_pgsql";
        $usuario = 'postgres';
        $senha = '123456';

        try {
            $pdo = new PDO($dsn, $usuario, $senha);
            
            $query = " SELECT * FROM usuarios WHERE ";
            $query .= " email=:email ";
            $query .= " AND senha=:senha; ";

            $stmt = $pdo->prepare($query); // prepare() não execute a query diretamente permitindo um tratamento
            
            $stmt->bindValue(":email", $_POST['email']); // Trata os injections de SQL
            $stmt->bindValue(":senha", $_POST['senha']); // Trata os injections de SQL

            $stmt->execute();

            $login = $stmt->fetch(PDO::FETCH_ASSOC);

            echo "<pre>";
            print_r($login);
            echo "</pre>";

        } catch (PDOException $error) {
    
            echo "Error: ". $error->getCode() . "<br> Message: " . $error->getMessage();
            die();
    
        }

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection</title>
</head>
<body>
    <form action="sql_injection.php" method="post">
        <input type="email" name="email" placeholder="Email"> <br><br>
        <input type="password" name="senha" placeholder="Senha" > <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>