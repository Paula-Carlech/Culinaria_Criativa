

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
        <h1 class="m-4 mb-4 text-center">Pesquisar Receitas</h1>

        
        <?php
            include('../Conectar/conectar.php');

            if (isset($_POST['nomeReceita'])) {
                $nomeReceita = $_POST['nomeReceita'];
                $sql_pesquisa_ureceita = "SELECT * FROM cc_receitas WHERE Nome_Receita LIKE '%$nomeReceita%'";
                $result = mysqli_query($conn, $sql_pesquisa_ureceita);
            }
        ?>
        <form class="container m-auto form-control p-3" action="../Receitas/pesquisa_receita.php" method="POST">
            <label for="nomeReceita">Nome da Receita:</label> <br>
            <input class="mb-3" type="text" id="nomeReceita" name="nomeReceita">
            <button type="submit" class="btn">Pesquisar</button>
        </form>

        <?php
        if (isset($result) && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="container my-4">';
                echo '<h2>' . $row['Nome_Receita'] . '</h2>';
                echo '<p>' . $row['Coz_Receita'] . '</p>';
                echo '</div>';
            }
        } elseif (isset($_POST['nomeReceita'])) {
            echo '<div class="container my-4">';
            echo '<p>Nenhuma receita encontrada com o nome "' . $nomeReceita . '".</p>';
            echo '</div>';
        }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
