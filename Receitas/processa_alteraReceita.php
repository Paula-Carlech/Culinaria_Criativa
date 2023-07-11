<?php
    include('../Conectar/conectar.php');
    $idReceita = $_POST['idReceita'];
    $nomeReceita = $_POST['nomeReceita'];
    $ingredientes = array();
    $quantidades = array();
    $unidades = array();
    $index = $_POST['index'];

    for ($i = 0; $i <= $index; $i++) {
        $id_ingredientes[] = $_POST['idingredientes' . $i];
        $ingredientes[] = $_POST['ingredientes' . $i];
        $quantidades[] = $_POST['quantidades' . $i];
        $unidades[] = $_POST['unidades' . $i];
    }
    $descricaoReceita = $_POST['descricaoReceita'];

    // Atualizar o nome da receita na tabela
    $sql_update_nome = "UPDATE cc_receitas SET Nome_Receita = '$nomeReceita' WHERE id_Receitas = $idReceita";
    mysqli_query($conn, $sql_update_nome);

    // Valide e limpe os dados recebidos, se necessário
    // ...

    // Execute a consulta UPDATE para atualizar os dados no banco de dados
    $sql_update_receita = "UPDATE cc_receitas SET Nome_Receita = '$nomeReceita', Descricao_Receita = '$descricaoReceita' WHERE id_Receitas = $idReceita";
    $resultado_update_receita = mysqli_query($conn, $sql_update_receita);

    // Verifique se a consulta UPDATE foi executada com sucesso
    if ($resultado_update_receita) {
        // Atualize os ingredientes no banco de dados
        for ($i = 0; $i < count($ingredientes); $i++) {
            $id_ingrediente = $id_ingredientes[$i];
            $ingrediente = $ingredientes[$i];
            $quantidade = $quantidades[$i];
            $unidade = $unidades[$i];
            $sql_update_ingrediente = "UPDATE cc_ingredientes SET Nome_Ingrediente = '$ingrediente', Q_Ingrediente = $quantidade, Uni_Ingrediente = '$unidade' WHERE id_ingrediente_cont = $id_ingrediente";
            mysqli_query($conn, $sql_update_ingrediente);
        }       
        // Redirecione para uma página de sucesso ou exiba uma mensagem de sucesso
        echo "<script>alert('As alterações foram salvas com sucesso!');</script>";
        header('Location: ../Receitas/minhasReceitas.php');
        exit();
    } else {
        // Lida com erro na atualização da receita
        echo "<script>alert('Erro ao salvar as alterações. Por favor, tente novamente mais tarde.');</script>";
        header('Location: pagina_de_erro.php');
        exit();
    }
?>
