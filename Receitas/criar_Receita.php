<?php
    session_start();
    $dire = "../Receitas/";
    $novapagid = $_SESSION['idreceita'];
    $exten = ".html";
    $novapag = $dire.$novapagid . $exten;
    
    $pag = fopen($novapag, "w") or die("Não foi possível criar o arquivo");

    $conteudoHTML = "<html><head><title>Meu Arquivo Dinâmico</title></head><body><h1>Conteúdo Dinâmico</h1><p>Este é um arquivo HTML criado dinamicamente.</p></body></html>";
    fwrite($pag, $conteudoHTML);

    fclose($pag);
    header("Location: $novapag");    
?>