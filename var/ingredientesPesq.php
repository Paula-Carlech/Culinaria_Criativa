<?php
function IQU ($idReceitaIQU){
    $id = $idReceitaIQU;
    include('../Conectar/conectar.php');
    // Realizar a pesquisa em banco de dados para obter os ingredientes
    $sql_pesquisa_ingredientes = "SELECT Q_Ingrediente, Uni_Ingrediente, Nome_Ingrediente FROM cc_ingredientes where Id_Receita = '$id'";
    $resultado = mysqli_query($conn, $sql_pesquisa_ingredientes);
    // Vetores para armazenar os ingredientes, quantidades e unidades
    //$ingredientes = array();
    //$quantidades = array();
    //$unidades = array();
    
    // Verificar se a consulta retornou resultados
    if (mysqli_num_rows($resultado) > 0) {
        // Percorrer os resultados e preencher os vetores
        while ($row = mysqli_fetch_assoc($resultado)) {
            $ingrediente = $row['Nome_Ingrediente'];
            $quantidade = $row['Q_Ingrediente'];
            $unidade = $row['Uni_Ingrediente'];
            echo '<li>' . $quantidade . ' ' . $unidade . ' de ' . $ingrediente . '</li>';
        }
        /*for ($i = 0; $i < count($ingredientes); $i++) {
            $quantidade = $quantidades[$i];
            $unidade = $unidades[$i];
            $ingrediente = $ingredientes[$i];  
        }*/
    }
}

?>
