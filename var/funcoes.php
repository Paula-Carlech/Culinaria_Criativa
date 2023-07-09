<?php
function exibirModal($titulo, $id_Receita) {
    include('ingredientesPesq.php');
    // Cabeçalho do modal
    echo '<div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
    echo '<div class="modal-dialog">';
    echo '<div class="modal-content">';
    echo '<div class="modal-header">';
    echo '<h1 class="modal-title fs-5" id="exampleModalLabel">' . $titulo . '</h1>';
    echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
    echo '</div>';

    // Corpo do modal
    echo '<div class="modal-body m-auto text-justify">';
    echo '<img class="rounded img-modal w-100" src=" . $caminhoImagem . " alt="Foto da receita.">';
    echo '<h3>Ingredientes</h3>';

    // Exibir os ingredientes
    echo '<ul class="texto">';
    for ($i = 0; $i < count($ingredientes); $i++) {
        $quantidade = $quantidades[$i];
        $unidade = $unidades[$i];
        $ingrediente = $ingredientes[$i];

        echo '<li>' . $quantidade . ' ' . $unidade . ' de ' . $ingrediente . '</li>';
    }
    echo '</ul>';

    // Modo de preparo
    echo '<h3>Modo de Preparo</h3>';
    echo '<p class="texto"> . $modoPreparo . </p>';

    // Rodapé do modal
    echo '<div class="modal-footer">';
    echo '<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>';
    echo '</div>';

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}


?>
