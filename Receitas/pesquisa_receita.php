<?php
  include('../funcoes/funcoespesquisas.php');
  include('../funcoes/pesquisa_bd.php');
  // Verifica se a pesquisa foi realizada em receitas.php
    //if (isset($_POST['termoPesquisa'])) {
        $termoPesquisa = $_POST['termoPesquisa'];
        // Realize a pesquisa no banco de dados com base no termo de pesquisa
        // Armazene os resultados em uma variável
        include('../Conectar/conectar.php');
        $sql_nome_pesquisa = "SELECT * FROM cc_receitas WHERE Nome_Receita LIKE '%$termoPesquisa%'";
        $result_nome_pesquisa = mysqli_query($conn,$sql_nome_pesquisa);
        $linhasresultadosPesquisa = mysqli_fetch_assoc($result_nome_pesquisa);
    //}

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
              <a class="navbar-brand" href="../index.php"><img class="logo" src="../assets/images/LOGO.png" alt="Logo Culinária Criativa"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" href="../Autenticacao/autenticar_receita.php">Receitas</a>
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

        <form class="container m-auto form-control p-3" action="../Receitas/pesquisa_receita.php" method="POST">
            <label for="nomeReceita">Nome da Receita:</label> <br>
            <input class="mb-3" type="text" id="nomeReceita" name="termoPesquisa">
            <button type="submit" class="btn">Pesquisar</button>
        </form>
        <?php if ($linhasresultadosPesquisa && is_array($linhasresultadosPesquisa)){?>
            <?php $numero_result = contarReceitas($termoPesquisa);?>
            <?php for ($i = 0; $i < $numero_result; $i++){?> 
                <div class="col btn btn_sem_cor" data-bs-toggle="modal" data-bs-target="#modal-<?php echo $linhasresultadosPesquisa['id_Receitas'];?>">
                <div class="card">
                    <img src="../assets/images/foto-salgada.png" class="card-img-top" alt="Foto da receita.">
                    <div class="card-body">
                    <h5 class="card-title text-center"><?php imprimeNomereceita($linhasresultadosPesquisa['Nome_Receita'])?></h5>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="modal-<?php echo $linhasresultadosPesquisa['id_Receitas']; //numero do modal?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?php imprimeNomereceita($linhasresultadosPesquisa['Nome_Receita']); ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body m-auto text-justify ">
                                <img class="rounded img-modal w-100" src="../assets/images/foto-salgada.png" alt="Foto da receita.">
                                <h3>Ingredientes</h3>
                                <p class="texto">
                                <?php
                                    IQU($linhasresultadosPesquisa['id_Receitas']);
                                ?>  
                                </p>
                                <h3>Modo de Preparo</h3>
                                <p class="texto">
                                <?php
                                    imprimeDescricao($linhasresultadosPesquisa['id_Receitas']);
                                ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>    
        <?php }?>       

    </main>

    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>
</html>
