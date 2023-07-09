<?php
include('../Conectar/conectar.php');
session_start();
$id = $_SESSION['id'];
// Realizar a pesquisa em banco de dados para obter os ingredientes
$sql = "SELECT Q_Ingrediente, Uni_Ingrediente, Nome_Ingrediente FROM cc_ingredientes where Id_Receita = '$id'";
$resultado = mysqli_query($conn, $sql);
    // Vetores para armazenar os ingredientes, quantidades e unidades
    $ingredientes = array();
    $quantidades = array();
    $unidades = array();

    // Verificar se a consulta retornou resultados
    if (mysqli_num_rows($resultado) > 0) {
        // Percorrer os resultados e preencher os vetores
        while ($row = mysqli_fetch_assoc($resultado)) {
            $ingredientes[] = $row['ingrediente'];
            $quantidades[] = $row['quantidade'];
            $unidades[] = $row['unidade'];
            
        }
    }


?>
