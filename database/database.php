<?php 

    // endereço
    $host = 'localhost';
    // nome do banco
    $nome_db = 'help_desk';
    // usuario
    $usuario = 'postgres';
    // senha
    $senha = '123456';

    try {
        // DNS -> nome do driver, no caso pgsql
        // PDO ("pgsql:host; port; dbname", user, password, exception);
        $pdo = new PDO("pgsql:host=$host; port=5432; dbname=$nome_db", $usuario, $senha);

        echo "Conectado ao banco de dados";
        
    } catch (PDOException $erro) {

        echo "Deu o erro: $erro";
        die();

    }
?>