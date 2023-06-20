<?php
// Informações de conexão
$servername = "localhost";
$username = "Culinaria_Criativa_ADM";
$password = "B5WgBJ5wRZIDEIe";
$dbname = "db_cc";

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Executa uma consulta
$sql = "SELECT * FROM DB_HelpDesk";
$result = mysqli_query($conn, $sql);

// Manipula os dados retornados
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// Fecha a conexão
mysqli_close($conn);
?>
