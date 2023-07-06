<?php
    session_start();
    $dire = "../Receitas/";
    $novapagid = $_SESSION['idreceita'];
    $exten = ".html";
    $novapag = $dire.$novapagid . $exten;
    
    $pag = fopen($novapag, "w") or die("Não foi possível criar o arquivo");

    $conteudoHTML = '<html>
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Receitas</title>
                            <link rel="shortcut icon" href="assets/images/LOGO.png" type="image/x-icon">
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
                            <link rel="stylesheet" href="styles/main.css">
                        </head>
                        <body>
                            <header>
                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="index.html"><img class="logo" src="assets/images/LOGO.png" alt="Logo Culinária Criativa"></a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                            <div class="navbar-nav">
                                                <a class="nav-link" href="Autenticacao/autenticar_receita.php">Receitas</a>
                                                <a class="nav-link" href="Autenticacao/autenticar_minhasReceitas.php">Minhas Receitas</a>
                                                <a class="nav-link" href="sobre.html">Sobre</a>
                                                <a class="nav-link" href="Conta/conta.html">Conta</a>
                                                <a class="nav-link" href="/Conectar/logout.php">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </header>
                    </html>';
    fwrite($pag, $conteudoHTML);

    fclose($pag);
    header("Location: $novapag");    
?>