
!<!DOCTYPE html>

    // Cabeçalho do modal
     <div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">;
     <div class="modal-dialog">;
     <div class="modal-content">;
     <div class="modal-header">;
     <h1 class="modal-title fs-5" id="exampleModalLabel"> . <?php $titulo ?> . </h1>;
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>;
     </div>;

    // Corpo do modal
     <div class="modal-body m-auto text-justify">;
     <img class="rounded img-modal w-100" src=" . $caminhoImagem . " alt="Foto da receita.">;
     <h3>Ingredientes</h3>;

    // Exibir os ingredientes
     <ul class="texto">;
     <?php
    include('../var/ingredientesPesq.php');
    for ($i = 0; $i < count($ingredientes); $i++) {
        $quantidade = $quantidades[$i];
        $unidade = $unidades[$i];
        $ingrediente = $ingredientes[$i];
        echo'<li> . $quantidade .   . $unidade .  de  . $ingrediente . </li>';
 
    echo '</ul>;';
    }?>
    // Modo de preparo
     <h3>Modo de Preparo</h3>;
     <p class="texto"> . $modoPreparo . </p>;

    // Rodapé do modal
     <div class="modal-footer">;
     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>;
     </div>;

     </div>;
     </div>;
     </div>;
     </div>;

</html>