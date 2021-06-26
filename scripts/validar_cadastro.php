<?php 

    if ($_POST['email'] == "" || $_POST['password'] == "") {
        header('Location: ../cadastro.php?cadastro=empty');
    } else {
        // Verifica se email já está cadastrado
        header('Location: validar_login.php');
        // Valida o cadastro
        
    }

?>