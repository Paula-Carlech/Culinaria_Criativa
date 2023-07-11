<?php
  include('../funcoes/pesquisas.php');      
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas</title>
    <link rel="shortcut icon" href="../assets/images/LOGO.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/main.css">
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
                  <a class="nav-link active" aria-current="page" href="../Autenticacao/autenticar_receita.php">Receitas</a>
                  <a class="nav-link" href="../Autenticacao/autenticar_minhasReceitas.php">Minhas Receitas</a>
                  <a class="nav-link" href="sobre.html">Sobre</a>
                  <a class="nav-link" href="../Conta/conta.html">Conta</a>
                  <a class="nav-link" href="../Conectar/logout.php">Logout</a>

                </div>
              </div>
            </div>
          </nav>
    </header>

    <main>
      <h1 class="m-4 mb-5 text-center">Principais Receitas</h1>

      <form action="../Receitas/pesquisa_receita.php" method="post">
        <div class="input-group m-4 mb-5 m-auto" style="width: 400px;">
            <input type="text" class="form-control" name="termoPesquisa" placeholder=" Pesquisar receita, ingrediente ou relacionado" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
    </form>
    
      <div class="row row-cols-1 row-cols-md-3 m-3 row-gap-3">

          <div class="col btn btn_sem_cor" data-bs-toggle="modal" data-bs-target="#modal-1">
            <div class="card">
              <img src="assets/images/foto-salgada.png" class="card-img-top" alt="Foto da receita.">
              <div class="card-body">
                <h5 class="card-title text-center">Torta Salgada</h5>
              </div>
            </div>
          </div>

          <div class="col btn btn_sem_cor" data-bs-toggle="modal" data-bs-target="#modal-2">
            <div class="card">
              <img src="assets/images/Foto-doce.png" class="card-img-top" alt="Foto da receita.">
              <div class="card-body">
                <h5 class="card-title text-center">Tiramissú</h5>
              </div>
            </div>
          </div>

          <div class="col btn btn_sem_cor" data-bs-toggle="modal" data-bs-target="#modal-3">
            <div class="card">
              <img src="assets/images/bebida.png" class="card-img-top" alt="Foto da receita.">
              <div class="card-body">
                <h5 class="card-title text-center">Drink de morango com tequila</h5>
              </div>
            </div>
          </div>
      </div>
      
    </main>

    <!-- Modal-1 -->
    <div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel"> </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body m-auto text-justify ">
            <img class="rounded img-modal w-100" src="../assets/images/foto-salgada.png" alt="Foto da receita.">
            <h3>Ingredientes</h3>
            <p class="texto">
              <?php
                IQU(17);
              ?>  
            </p>
              <h3>Modo de Preparo</h3>
            <p class="texto">
              <?php
                imprimeDescricao(17);
              ?>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal-2 -->
    <div class="modal fade" id="modal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tiramussú</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body m-auto text-justify ">
            <img class="rounded img-modal w-100" src="assets/images/Foto-doce.png" alt="Foto da receita.">
            <h3>Ingredientes</h3>
            <p class="texto">
              - 400 g de queijo mascarpone <br>
              - 5 ml de baunilha <br>
              - 1 xícara de chá de açúcar refinado <br>
              - 5 gemas <br>
              - 300 ml de café frio <br>
              - 2 colheres de sopa de açúcar <br>
              - 200 g de biscoito champagne</p>
            <h3>Modo de Preparo</h3>
            <p class="texto">
              Creme sabayon <br>
              1. Em uma batedeira, adicione o açúcar, as gemas e a baunilha e bata até obter a consistência de um creme branco <br>
              2. Adicione o queijo mascarpone sem parar de bater até o creme ficar espesso <br>
              Camada de biscoito <br>
              3. Misture o café e o açúcar em um recipiente. <br>
              Montagem <br>
              4. Molhe os biscoito na mistura de café e forre completamente o fundo do recipiente onde o doce será servido com eles; <br>
              5. Despeje uma camada de creme sabayon e, por cima, outra camada de biscoitos e assim sucessivamente até o creme acabar; <br>
              6. O doce deve ir para a geladeira e ficar por 24 horas antes de ser servido;
              7. Sirva o doce com chocolate em pó por cima.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal-3 -->
    <div class="modal fade" id="modal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Drink de morango com tequila</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body m-auto text-justify ">
            <img class="rounded img-modal w-100" src="assets/images/bebida.png" alt="Foto da receita.">
            <h3>Ingredientes</h3>
            <p class="texto">
              - 5 morangos <br>
              - 1 colher de sopa de açúcar <br>
              - Suco de 1/2 limão <br>
              - 50 ml de tequila prata <br>
              - Gelo</p>
            <h3>Modo de Preparo</h3>
            <p class="texto">Coloque 3 morangos picados, o açúcar e o suco de limão em uma coqueteleira;
              Macere um pouco e, em seguida, acrescente a tequila e um pouco de gelo. Chacoalhe bem;
              Em um copo com gelo, adicione um dos morangos restantes cortado em fatias. Use a outra fruta para decorar a borda do copo;
              Acrescente a mistura da coqueteleira e aproveite!</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    
    <!-- Adicionar Modal dinamicamente -->
    <?php 
      //include 'Receitas/exibirReceita.php'; 
    ?>

    <script 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>