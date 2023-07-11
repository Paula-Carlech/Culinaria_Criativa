<?php
    include('../Conectar/conectar.php');
    $id_Receita = $_POST['id_receita_alterar'];
    
    $sql_all_sele_rec = "SELECT * FROM cc_receitas WHERE id_Receitas = $id_Receita";
    $result_all_sele_rec = mysqli_query($conn,$sql_all_sele_rec);
    $receita = mysqli_fetch_assoc($result_all_sele_rec);

    $sql_all_sele_ing = "SELECT * FROM cc_ingredientes WHERE id_Receita = $id_Receita";
    $result_all_sele_ing = mysqli_query($conn,$sql_all_sele_ing);
    $ingredientes = array();
    $quantidades = array();
    $unidades = array();
    while ($IQU = mysqli_fetch_assoc($result_all_sele_ing)) {
        $id_ingredientes[] = $IQU['id_ingrediente_cont'];
        $ingredientes[] = $IQU['Nome_Ingrediente'];
        $quantidades[] = $IQU['Q_Ingrediente'];
        $unidades[] = $IQU['Uni_Ingrediente'];
    }
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
    <form method="post" action="processa_alteraReceita.php">
        <!-- Campo para alterar o nome da receita -->
        <div>
            <label for="nomeReceita">Nome da Receita:</label>
            <input type="text" id="nomeReceita" name="nomeReceita" value="<?php echo $receita['Nome_Receita']; ?>">
        </div>
        <div>
            <label for="ingredientes">Ingredientes:</label>
            <?php foreach ($ingredientes as $index => $ingrediente) { ?>
                <div class="row">
                    <div class="col">
                        <label for="quantidade-<?php echo $index; ?>">Quantidade:</label>
                        <input type="text" id="quantidade-<?php echo $index; ?>" name="quantidades<?php echo $index; ?>" value="<?php echo $quantidades[$index]; ?>">
                    </div>
                    <div class="col">
                        <label for="unidade-<?php echo $index; ?>">Unidade:</label>
                        <input type="text" id="unidade-<?php echo $index; ?>" name="unidades<?php echo $index; ?>" value="<?php echo $unidades[$index]; ?>">
                    </div>
                    <div class="col">
                        <label for="ingrediente-<?php echo $index; ?>">Ingrediente:</label>
                        <input type="text" id="ingrediente-<?php echo $index; ?>" name="ingredientes<?php echo $index ;?>" value="<?php echo $ingrediente; ?>">
                    </div>
                    <input type="hidden" name="idingredientes<?php echo $index; ?>" value="<?php echo $id_ingredientes[$index]; ?>">
                </div>
            <?php } ?>
        </div>
        <!-- Campo para alterar a descrição da receita -->
        <div>
            <label for="descricaoReceita">Descrição:</label>
            <textarea id="descricaoReceita" name="descricaoReceita"><?php echo $receita['Descricao_Receita']; ?></textarea>
        </div>
        <!-- Campo para alterar outros detalhes da receita -->
        <!-- ... -->

        <input type="hidden" name="idReceita" value="<?php echo $id_Receita; ?>">
        <input type="hidden" name="index" value="<?php echo $index; ?>">
        <button type="submit">Salvar Alterações</button>
    </form>
        
    </main>

</html>