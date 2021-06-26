<?php

    session_start();
    if (isset($_SESSION["autenticado"]) && $_SESSION["autenticado"] == "SIM") {
        if ($_SESSION["email"] == "adm@adm.com") {
        } else {
            header('Location: ../public/home.php?adm=erro_adm');
        }
    } else {
        header('Location: ../index.php?login=erro_session');
    }

?>