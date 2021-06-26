<?php

    $arquivo = fopen('../chamados/chamados.txt', 'r');

    $chamados = array();

    while(!feof($arquivo)) {
    $linha = fgets($arquivo);
    array_push($chamados, $linha);
    }

    fclose($arquivo);

?>