<?php

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

    foreach($usuarios_cadastrados as $user) {

        if($user["email"] == $_POST["email"] && $user["password"] == $_POST["password"]){
            $usuario_autenticado = true;
        };
           
    };

    if ($usuario_autenticado) {
        echo "Usuário autenticado.";
    }else {
        # header('Location: [para onde será redirecionado]') -> redirecionamento
        header('Location: index.php?login=erro');
    };

?>