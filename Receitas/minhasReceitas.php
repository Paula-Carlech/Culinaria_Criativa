<?php 
  include ('../Conectar/conectar.php');
  include ('../funcoes/ingredientesPesq.php');
  session_start();
?>
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
              <a class="navbar-brand" href="../index.php"><img class="logo" src="../assets/images/LOGO.png" alt="Logo Culinária Criativa"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" href="../Autenticacao/autenticar_receita.php">Receitas</a>
                  <a class="nav-link active" aria-current="page" href="../Autenticacao/autenticar_minhasReceitas.php">Minhas Receitas</a>
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

      <div class="d-flex justify-content-end mx-5" style="font-size: 1.2em;">
        <a class="link-offset-2 link-underline link-underline-opacity-0 link_add d-flex align-items-center" href="./novaReceita.html">
          <i class="bi bi-file-plus-fill" style="font-size: 1.5em;"></i>
          Adicionar Receita
        </a>
      </div>
      <?php
        $id_user = $_SESSION['id'];
        $sql_all_u_rec = "SELECT * FROM cc_receitas WHERE id_Coz_Receita = $id_user";
        $result_select_u_rec = mysqli_query($conn,$sql_all_u_rec);
        $linha = mysqli_fetch_assoc($result_select_u_rec);
        if(mysqli_num_rows($result_select_u_rec)>0){
          while($linha = mysqli_fetch_assoc($result_select_u_rec)){
            $id_receita = $linha['id_Receitas'];
            ?>
            <div class="modal fade" id="modal-<?php echo $id_receita; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $linha['Nome_Receita']?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body m-auto text-justify ">
                    <img class="rounded img-modal w-100" src="../assets/images/foto-salgada.png" alt="Foto da receita.">
                    <h3>Ingredientes</h3>
                    <p class="texto">
                      <?php
                        IQU($id_receita);
                      ?>  
                    </p>
                      <h3>Modo de Preparo</h3>
                    <p class="texto">
                      <?php echo $linha['Descricao_Receita']?></p>
                  </div>
                  <div class="modal-footer">
                    <form action="alterarReceita.php" method="post">
                    <input type="hidden" name="id_receita_alterar" value ="<?php echo $id_receita?>">
                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Alterar</button>
                    </form>                  
                    <form action="excluirReceita.php" method="POST">
                      <input type="hidden" name="id_receita_excluir" value="<?php echo $id_receita; ?>">
                      <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Excluir</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $id_receita; ?>">
              <?php echo $linha['Nome_Receita']; ?>
            </button>

            <?php
          }
        } ?>
      <!--<div class="d-flex justify-content-end mx-5" style="font-size: 1.2em;">
        <a class="link-offset-2 link-underline link-underline-opacity-0 link_add d-flex align-items-center" href="./alterarReceita.php">
          <i class="bi bi-file-plus-fill" style="font-size: 1.5em;"></i>
          Alterar Receita
        </a>
      </div>
       <div class="row row-cols-1 row-cols-md-3 m-3 row-gap-3">
        
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