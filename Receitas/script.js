// Código para adicionar novos ingredientes
const btnAdicionar = document.getElementById('adicionarIngrediente');
const containerIngredientes = document.getElementById('novosIngredientes');

btnAdicionar.addEventListener('click', function() {
    const novoIngrediente = document.createElement('div');
    novoIngrediente.classList.add('novoIngrediente');
    novoIngrediente.innerHTML = `
        <input type="text" name="quantidade[]" placeholder="Quantidade">
        <input type="text" name="unidade[]" placeholder="Unidade">
        <input type="text" name="ingrediente[]" placeholder="Ingrediente">
        <button type="button" class="btnRemoverIngrediente">Remover</button>
    `;
    containerIngredientes.appendChild(novoIngrediente);
});

// Código para remover ingredientes
containerIngredientes.addEventListener('click', function(event) {
    if (event.target.classList.contains('btnRemoverIngrediente')) {
        const ingredienteRemovido = event.target.parentNode;
        containerIngredientes.removeChild(ingredienteRemovido);
    }
});
