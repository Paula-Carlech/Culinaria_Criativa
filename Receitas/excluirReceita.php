<?php
include('../Conectar/conectar.php');
// Verifica se foi enviado o ID da receita
if (isset($_POST['id_receita_excluir'])) {
  $id_receita_excluir = $_POST['id_receita_excluir'];

  // Realize a conexão com o banco de dados

  // Execute a query para excluir a receita
  $sql_excluir_receita = "DELETE FROM cc_receitas WHERE id_Receitas = $id_receita_excluir";
  $result_excluir_receita = mysqli_query($conn, $sql_excluir_receita);

  // Execute a query para excluir os ingredientes relacionados a essa receita
  $sql_excluir_ingredientes = "DELETE FROM cc_ingredientes WHERE id_Receita = $id_receita_excluir";
  $result_excluir_ingredientes = mysqli_query($conn, $sql_excluir_ingredientes);

  // Verifique se a exclusão foi bem-sucedida
  if ($result_excluir_receita && $result_excluir_ingredientes) {
    echo '<script>alert("Receita excluída com sucesso!");</script>';
    header('Location ../Receitas/minhasReceitas.php');
    exit;
  } else {
    // A exclusão falhou
    // Você pode retornar uma resposta para o JavaScript indicando o erro
    echo 'error';
  }
}
?>
