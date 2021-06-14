var conteinerItens = document.getElementById("conteiner-itens");

function addItem () {
    conteinerItens.innerHTML += `
    <div class="col-md-4 mt-2 mb-2">
        <a class="nome" href="index.php">
            <div class="card p-3">
                <div class="d-flex flex-row mb-3 "><img class="banner" src="${ restaurante.image || "./img/bannerweb.jpg" }"></div>
                <span><b>${restaurante.name}</b></span>
            </div>
        </a>
    </div>`;
}

function removeItem(element) {
    conteinerItens.removeChild(element)
}
