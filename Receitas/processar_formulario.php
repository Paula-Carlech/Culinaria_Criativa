<?php
    include('../Conectar/conectar.php');
    session_start();
    // Verificar se o formulário foi enviado
    //if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // Obter o nome da receita
        $nomeReceita = $_SESSION['nomeReceita'] = $_POST['nomeReceita'];
        
        // Obter os ingredientes adicionados
        $quantidades = $_POST['quantidade'];
        $unidades = $_POST['unidade'];
        $ingredientes = $_POST['ingrediente'];

        
        // Obter informações da sessão
        $usuario_id = $_SESSION['id'];
        $usuario_pri_nome = $_SESSION['pnome'];
        $usuario_ult_nome = $_SESSION['unome'];
        $nomeCompleto = $usuario_pri_nome ;//. " " . $usuario_ult_nome ;
        $descricao = $_POST['descricao'];

        // Inserir na tabela
        $sql_processamento_receita = "INSERT INTO cc_receitas (Nome_Receita, Coz_Receita, id_Coz_Receita, Descricao_Receita	) VALUES ( '$nomeReceita', '$nomeCompleto' , $usuario_id, '$descricao' )";
        $resultado_proc_rec = mysqli_query($conn, $sql_processamento_receita);
        
        
        $sql_id_rec = "SELECT id_Receitas FROM cc_receitas WHERE Nome_Receita = '$nomeReceita' ORDER BY id_Receitas DESC LIMIT 1";
        $resultado_id_rec = mysqli_query($conn, $sql_id_rec);
        $row = mysqli_fetch_assoc($resultado_id_rec);
        $idReceita = $row['id_Receitas'];
        
        $_SESSION['idreceita'] = $idReceita;
        

        
        for ($i = 0; $i < count($ingredientes); $i++) {
            $quantidade = $quantidades[$i];
            $unidade = $unidades[$i];
            $ingrediente = $ingredientes[$i];
            $sql_processamento_ingrediente = "INSERT INTO cc_ingredientes(Nome_Ingrediente, Q_Ingrediente, Uni_Ingrediente, id_Receita) VALUES ('$ingrediente', $quantidade, '$unidade', $idReceita)";
            $resultado_insert_ingred_quant_uni = mysqli_query($conn,$sql_processamento_ingrediente);
        }
        echo "<script>alert('Receita cadastrada com sucesso!');</script>";

        header('Location: ../Receitas/minhasReceitas.php');

    //}

    
?>
