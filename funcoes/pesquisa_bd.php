<?php
    function realizarPesquisa($termoPesquisa){
        include('../Conectar/conectar.php');
        $sql_pesquisa_bd = "SELECT * FROM cc_receitas WHERE Nome_Receita LIKE '%$termoPesquisa%'";
        $result_pesquisa_bd = mysqli_query($conn,$sql_pesquisa_bd);
        $row_result_pesquisa_bd = mysqli_fetch_assoc($result_pesquisa_bd);
        return $row_result_pesquisa_bd;
    }
?>