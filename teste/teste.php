<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Receitas</title>
    <link rel="shortcut icon" href="../assets/images/LOGO.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="../index.html"><img class="logo" src="../assets/images/LOGO.png" alt="Logo Culinária Criativa"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" href="../index.html">Receitas</a>
                  <a class="nav-link active" aria-current="page" href="../Receitas/minhasReceitas.php">Minhas Receitas</a>
                  <a class="nav-link" href="../sobre.html">Sobre</a>
                  <a class="nav-link" href="../Conta/conta.html">Conta</a>
                  <a class="nav-link" href="../Conectar/logout.php">Logout</a>
                </div>
              </div>
            </div>
          </nav>
    </header>

    <main>
      
      <h1 class="m-4 mb-4 text-center">Minhas Receitas</h1>

      
      <div class="row row-cols-1 row-cols-md-3 m-3 row-gap-3">
        <?php 
        session_start();
        include('../Conectar/conectar.php');
        include('../var/funcoes.php');
        $id = $_SESSION['id'];
        
        $sql = "SELECT * FROM cc_receitas WHERE id_Coz_Receita='$id'";
        $result = mysqli_query($conn,$sql);
        
        if (mysqli_num_rows($result) > 0) {
            while ($linha = mysqli_fetch_assoc($result)) {
                $titulo = $linha['Nome_Receita'];
                $id_Receita = $linha['id_Receitas'];
                echo '<div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                echo '<div class="modal-dialog">';
                echo '<div class="modal-content">';
                echo '<div class="modal-header">';
                echo '<h1 class="modal-title fs-5" id="exampleModalLabel">' . $titulo . '</h1>';
                echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                echo '</div>';
                echo '<div class="modal-body m-auto text-justify">';
                echo '<img class="rounded img-modal w-100" src="' . $imagem . '" alt="Foto da receita.">';
                echo '<h3>Ingredientes</h3>';
                echo '<ul class="texto">';
                foreach ($ingredientes as $ingrediente) {
                  echo '<li>' . $ingrediente . '</li>';
                }
                echo '</ul>';
                echo '<h3>Modo de Preparo</h3>';
                echo '<p class="texto">' . $modoPreparo . '</p>';
                echo '</div>';
                echo '<div class="modal-footer">';
                echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            
                
            }
        }
    ?>
</div>

        
       <!-- <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
          <div class="col">
            <div class="card">
              <img src="../assets/receita.jpg" class="card-img-top" alt="Foto da receita.">
              <div class="card-body">
                <h5 class="card-title text-center">Nome da receita</h5>
              </div>
            </div>
          </div>
        </a>

        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">
          <div class="col">
            <div class="card">
              <img src="../assets/receita.jpg" class="card-img-top" alt="Foto da receita.">
              <div class="card-body">
                <h5 class="card-title text-center">Nome da receita</h5>
              </div>
            </div>
          </div>
        </a> -->
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>