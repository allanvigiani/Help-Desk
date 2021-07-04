<?php 

    // dsn -> nome do driver, no caso pgsql
    $dsn = "pgsql:host=localhost; port=5432; dbname=php_pgsql";
    // usuario
    $usuario = 'postgres';
    // senha
    $senha = '123456';

    try {
        // PDO ("pgsql:host; port; dbname", user, password, exception);
        $pdo = new PDO($dsn, $usuario, $senha);
        // echo "Conectado ao banco de dados";

        $db_query = "
            select * from usuarios
        ";
        // executar uma query
        // FETCHALL()
        $execute = $pdo->query($db_query);
        $query_fetch = $execute->fetchAll(PDO::FETCH_OBJ); // retorna array de arrays

        // Vizualização dos registros recuperados
        // echo '<pre>';
        // print_r($query_fetch);
        // echo '</pre>';
        
        foreach ($query_fetch as $key => $value) {
            echo '<pre>';
            print_r($value->nome);
            echo '</pre>';
        }

        echo '<hr>';

        // Outro modo de buscar os elementos
        foreach ($pdo->query($db_query) as $key => $value) {
            echo '<pre>';
            print_r($value['email']);
            echo '</pre>';
        }

        echo "<hr>";

        // FETCH()
        /*
        $db_query_user = "
            select * from usuarios where nome='Allan';
        ";
        
        $execute_user = $pdo->query($db_query_user);
        $user = $execute_user->fetch(PDO::FETCH_OBJ); // retorna uma array de objetos

        echo $user->nome . "<br>";
        echo $user->email . "<br>";
        echo $user->senha;
        */

    } catch (PDOException $error) {

        echo "Error: ". $error->getCode() . "<br> Message: " . $error->getMessage();
        die();

    }

?>