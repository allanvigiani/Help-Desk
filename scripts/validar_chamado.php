<?php
    // Armazenar chamados em arquivos TXT
    // TODO -> Arquivar em banco de dados (POSTEGRE)
    
    if ($_POST['titulo'] == "" || $_POST['categoria'] == "0" || $_POST['descricao'] == "") {

        header('Location: ../public/abrir_chamado.php?input=empty');

    } else {

        $titulo = str_replace('|', '', $_POST['titulo']);
        $categoria = str_replace('|', '', $_POST['categoria']);
        $descricao = str_replace('|', '', $_POST['descricao']);
        
        $chamado = $_POST['titulo'] . "|" . $_POST['categoria'] . "|" . $_POST['descricao'] . PHP_EOL;

        // Abrir arquivo ('nome_arquivo', 'abrir, ler ou fechar arquivo')
        $arquivo = fopen('../chamados/chamados.txt', 'a'); // a -> abre somente para escrita e leitura
        
        // Escreve em um arquivo (referencia do arquivo, conteudo)
        fwrite($arquivo, $chamado);

        fclose($arquivo);

        header('Location: ../public/abrir_chamado.php?status=success');
        
    }

?>