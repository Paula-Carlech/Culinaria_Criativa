<?php
include('../Conectar/conectar.php');

/*if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}*/

$sql = "SELECT Nome_Receita, ingredientes, modo_preparo FROM receitas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $modalId = 1; // ID inicial do modal

    while ($row = $result->fetch_assoc()) {
        $nome = $row["nome"];
        $ingredientes = $row["ingredientes"];
        $modoPreparo = $row["modo_preparo"];

        // Exiba as informações da receita
        echo '<div class="modal fade" id="modal-' . $modalId . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        echo '  <div class="modal-dialog">';
        echo '    <div class="modal-content">';
        echo '      <div class="modal-header">';
        echo '        <h1 class="modal-title fs-5" id="exampleModalLabel">' . $nome . '</h1>';
        echo '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        echo '      </div>';
        echo '      <div class="modal-body m-auto text-justify">';
        echo '        <img class="rounded img-modal w-100" src="assets/images/foto-' . $modalId . '.png" alt="Foto da receita.">';
        echo '        <h3>Ingredientes</h3>';
        echo '        <p class="texto">' . $ingredientes . '</p>';
        echo '        <h3>Modo de Preparo</h3>';
        echo '        <p class="texto">' . $modoPreparo . '</p>';
        echo '      </div>';
        echo '      <div class="modal-footer">';
        echo '        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';

        $modalId++; // Incrementa o ID do modal
    }
} else {
    echo "Nenhuma receita encontrada.";
}

$conn->close();
?>
