var conteinerItens = document.getElementById("conteiner-itens");

function addItem () {
    conteinerItens.innerHTML += 
`
    <div class="bg-light comments-box p-3 mt-3">
        <div class="d-flex justify-content-between align-items-center"></div>
        <div class="d-flex justify-content-between align-items-center">
            <h6 class="text-muted">canja de galinha</h6>
            <div class="text-center">2x</div>
            <div class="text-center">R$15,00</div>
            <span>
                <div class="btn-group">
                    <a class="btn" data-toggle="dropdown" href="#">
                    <img src="https://image.flaticon.com/icons/png/512/64/64576.png" width="15px" alt="">
                    <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                    <div class="dropdown-item" style="cursor: pointer;" id="editarItem">Editar item</div>
                    <div class="dropdown-item" style="cursor: pointer;" id="apagarItem" onclick="removeItem(this)">Remover item</div>
                    </ul>
                </div>
            </span>
        </div>
    </div>
`
}

function removeItem(element) {
    element.parentNode.parentNode.parentNode.parentNode.parentNode.outerHTML = '';
}
