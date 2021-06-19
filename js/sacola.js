var conteinerItens = document.getElementById("conteiner-itens");
const itens = [
    {
        id: 1,
        nome: "Pizza",
        quantidade: 2,
        valor: 25.90,
    },
    {
        id: 2,
        nome: "Pudim",
        quantidade: 1,
        valor: 5,
    },
    {
        id: 3,
        nome: "Coca-Cola 350ml",
        quantidade: 2,
        valor: 4,
    },
    {
        id: 4,
        nome: "Coxinha",
        quantidade: 1,
        valor: 4,
    },
    {
        id: 5,
        nome: "Suco Verde",
        quantidade: 1,
        valor: 7,
    }
]

// localStorage.hasOwnProperty("produtos") ? console.log("SIM") : console.log("NÃO");

for (const item of itens) {
    conteinerItens.innerHTML += 
    `
        <div class="bg-light comments-box p-3 mt-3">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="text-muted" style="width: 40%;">${item.nome}</h6>
                <div class="text-center">${item.quantidade}x</div>
                <div class="text-center">${item.valor.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</div>
                <span>
                    <div class="btn-group">
                        <a class="btn" data-toggle="dropdown" href="#">
                        <img src="https://image.flaticon.com/icons/png/512/64/64576.png" width="15px" alt="">
                        <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                        <div class="dropdown-item" style="cursor: pointer;" >Editar item</div>
                        <div class="dropdown-item" data-idproduto="${item.id}" style="cursor: pointer;" onclick="removerItem(this)">Remover item</div>
                        </ul>
                    </div>
                </span>
            </div>
        </div>
    ` 
}

// function addItem () {
    
    // localStorage.setItem("produtos", JSON.stringify(itens))

    // var produtos = JSON.parse(localStorage.getItem("produtos"))

    // console.log(produtos)

//     conteinerItens.innerHTML += 
// `
//     <div class="bg-light comments-box p-3 mt-3">
//         <div class="d-flex justify-content-between align-items-center"></div>
//         <div class="d-flex justify-content-between align-items-center">
//             <h6 class="text-muted">canja de galinha</h6>
//             <div class="text-center">2x</div>
//             <div class="text-center">R$15,00</div>
//             <span>
//                 <div class="btn-group">
//                     <a class="btn" data-toggle="dropdown" href="#">
//                     <img src="https://image.flaticon.com/icons/png/512/64/64576.png" width="15px" alt="">
//                     <span class="caret"></span>
//                     </a>
//                     <ul class="dropdown-menu">
//                     <div class="dropdown-item" style="cursor: pointer;" id="editarItem">Editar item</div>
//                     <div class="dropdown-item" style="cursor: pointer;" id="apagarItem" onclick="removerItem(this)">Remover item</div>
//                     </ul>
//                 </div>
//             </span>
//         </div>
//     </div>
// `
// }

function removerItem(element) {
    // localStorage.removeItem("produtos")
    produtoId = element.dataset.idproduto;

    indexProduct = itens.findIndex(item => {
        return item.id == produtoId;
    })

    itens.splice(indexProduct, 1)

    console.log(itens.length)

    if (itens.length === 0) {
        conteinerItens.innerHTML = `
            <p class="text-center corpo container">
                <img src="img/icone.png" width="35%" alt="">
                <br>
                <b>Você ainda não pediu no myOrder! :(</b> <br>
                <span>Experimente os melhores restaurantes</span>
            </p>    
        `

        document.getElementById("footer-bag").innerHTML = "";
    }

    element.parentNode.parentNode.parentNode.parentNode.parentNode.outerHTML = '';
}
