<?php 

    session_start();
    // Remover a variável de sessão
    //session_destroy()
    session_destroy();
    header('Location: ../index.php?logoff=logoff')

?>