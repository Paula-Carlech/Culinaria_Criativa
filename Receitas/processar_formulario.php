<?php
    include('../Conectar/conectar.php');
    session_start();
    // Verificar se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // Obter o nome da receita
        $nomeReceita = $_POST['nomeReceita'];

        // Obter os ingredientes adicionados
        $quantidades = $_POST['quantidade'];
        $unidades = $_POST['unidade'];
        $ingredientes = $_POST['ingrediente'];

        // Obter informações da sessão
        $usuario_id = $_SESSION['id'];
        $usuario_pri_nome = $_SESSION['pnome'];
        $usuario_ult_nome = $_SESSION['unome'];

        // Inserir na tabela
        $sql_processamento_receita = "INSERT INTO cc_receitas(Nome_Receita, Coz_Receita, id_Coz_Receita) VALUES ('$nomeReceita', '" . $usuario_pri_nome . " " . $usuario_ult_nome . "', $usuario_id)";
        $resultado_proc_rec = mysqli_query($conn,$sql_processamento_receita);
        $idReceita = mysqli_insert_id($conn);
        $_SESSION['idreceita'] = $idReceita;
        $sql_id_rec = "SELECT id_Receitas FROM cc_receitas WHERE Nome_Receita = '$nomeReceita' ORDER BY id_Receitas DESC LIMIT 1";
        $resultado_id_rec = mysqli_query($conn,$sql_id_rec);
        $row = mysqli_fetch_assoc($resultado_id_rec); 
        $_SESSION['idreceita'] = $idReceita = $row['id_Receitas'];

        
        for ($i = 0; $i < count($ingredientes); $i++) {
            $quantidade = $quantidades[$i];
            $unidade = $unidades[$i];
            $ingrediente = $ingredientes[$i];
            $sql_processamento_ingrediente = "INSERT INTO cc_ingredientes(Nome_Ingrediente, Q_Ingrediente, Uni_Ingrediente, Id_Receita) VALUES ('$ingrediente', $quantidade, '$unidade', $idReceita)";
            $resultado_insert_ingred_quant_uni = mysqli_query($conn,$sql_processamento_ingrediente);
        }
        header('Location: ../Receitas/criar_Receita.php');
        exit;
    }

    
?>
