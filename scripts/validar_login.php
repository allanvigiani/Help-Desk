<?php

    session_start();
    $_SESSION['autenticado'];
    # Super global $_POST
    # $_POST;

    # Lista de usuários cadastrados no sistema
    $usuarios_cadastrados = [
        [
            "email" => "adm@adm.com",
            "password" => "adm"
        ],
        [
            "email" => "teste@teste.com",
            "password" => "teste"
        ],
    ];

    # Variável de usuário autenticado
    $usuario_autenticado = false;

    # Guardar email do usuário
    $email_usuario;

    # Percorre todos os elementos do array $usuarios_cadastrados
    foreach($usuarios_cadastrados as $user) {

        if($user["email"] == $_POST["email"] && $user["password"] == $_POST["password"]){
            $usuario_autenticado = true;
            $email_usuario = $_POST["email"];
        };
           
    };

    if ($usuario_autenticado) {
        $_SESSION["autenticado"] = 'SIM';
        $_SESSION["email"] = $email_usuario;
        header('Location: ../public/home.php');
    }else {
        # header('Location: para onde será redirecionado') -> redirecionamento
        header('Location: ../index.php?login=erro');
        $_SESSION["autenticado"] = 'NAO';
    };

?>