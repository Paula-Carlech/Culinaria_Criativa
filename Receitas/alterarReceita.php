<?php
    include('../Conectar/conectar.php');
    $id_Receita = $_POST['id_receita_alterar'];
    
    $sql_all_sele_rec = "SELECT id_Receitas, Nome_Receita FROM cc_receitas WHERE id_Receita = $id_Receita";
    $result_all_sele_rec = mysqli_query($conn,$sql_all_sele_rec);

    $sql_all_sele_ing = "SELECT * FROM cc_ingredientes WHERE id_Receita = $id_Receita";
    $result_all_sele_ing = mysqli_query($conn,$sql_all_sele_ing);

    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Receitas</title>
    <link rel="shortcut icon" href="../assets/images/LOGO.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="logo" src="../assets/images/LOGO.png" alt="Logo Culinária Criativa"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="../Autenticacao/autenticar_receita.php">Receitas</a>
                    <a class="nav-link" href="../Autenticacao/autenticar_minhasReceitas.php">Minhas Receitas</a>
                    <a class="nav-link" href="../sobre.html">Sobre</a>
                    <a class="nav-link" href="../Conta/conta.html">Conta</a>
                    <a class="nav-link" href="../Conectar/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        
    </main>

</html>