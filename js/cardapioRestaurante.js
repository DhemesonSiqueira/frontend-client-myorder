var bannerRestaurante = document.getElementById("banner-restaurante");
var infoRestaurante = document.getElementById("info-restaurante");
var contCardapio = document.getElementById("conteiner-cardapio");
var modalProduto = document.getElementById("modal-produto");

const params = new URL(document.location).searchParams;
const restauranteId = params.get("id");

async function getRestaurante(id) {
  const restaurant = await axios.get(`http://localhost:3000/restaurants/${id}`);
  
  return restaurant.data;
}

async function getCardapio(id) {
  const menu = await axios.get(`http://localhost:3000/products/${id}`);
  
  return menu.data;
}

async function getProduct(id) {
  const produto = await axios.get(`http://localhost:3000/products/${restauranteId}/${id}`);

  return produto.data;
}

function changeQtd(tp) {
  var qtdProduto = document.getElementById("qtdProduto");
  var numItem = Number(qtdProduto.innerText)
  switch (tp) {
    case 0:
      numItem > 0 ? numItem -= 1 : numItem = 0;
      break;
    case 1:
      numItem >= 0 ? numItem += 1 : numItem = 0;
       break;
  }

  qtdProduto.innerHTML = numItem;
}

const result = getRestaurante(restauranteId);
const cardapio = getCardapio(restauranteId);

result.then(restaurante => {
  let address = restaurante.address[0];
    bannerRestaurante.innerHTML += `
      <h3><img class="foto-perfil" src="${restaurante.image || "./img/bannerweb.jpg"}"></h3>
    `;

    infoRestaurante.innerHTML += `
      <h4 class="nome-local mb-2">${restaurante.name}</h4>
      <div class="mb-2"><i class="fas fa-map-marker-alt"></i> <span>${address.address} - ${address.number}</span></div>
    `;
});

cardapio.then(products => {
  for (const category of products) {
    if(category.products.length > 0) {
      contCardapio.innerHTML += `
          <h5 class="mb-4 ">${category.name}</h5>
          <div class="row" id="${category.id}">  </div>
      `;

      var contItens = document.getElementById(category.id);
    }
    
    for (const item of category.products) {
        contItens.innerHTML += `
          <div class="col-md-4 mb-4" data-id="${item.id}" onclick="modalBody(this)">
            <a href="#exampleModalCenterr" data-toggle="modal" data-target="#exampleModalCenterr">
              <div class="card p-3">
                <div class="d-flex flex-row mb-3">
                ${item.image !== null ? `<img src="${item.image}" width="70" height="70">` : ""}
                  <div class="d-flex flex-column ml-2"><span>${item.name}</span><span class="text-black-50">${item.description}</span>
                    <span class="float-left">${Number(item.price).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        `;
    }
  }
});



function modalBody(elem) {
  getProduct(elem.dataset.id)
  .then(product => {
    modalProduto.innerHTML = ""

    modalProduto.innerHTML += `
      <div class="mb-4 text-center">
        <h3>
          <img src="${product.image !== null ? product.image : "" }" width="100%">
        </h3>
      </div>
      <h4 class="nome-local mb-2">${product.name}</h4>
      <div class="mb-2"><span>${product.description}</span></div>
      <span mb-2">${Number(product.price).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</span>
      <input type="hidden" data-productid="${product.id}">
    `;

    for (const optionsGroup of product.optionsGroup) {
      if(optionsGroup && optionsGroup.options.length > 0) {
        modalProduto.innerHTML += `
          <div class="bg-light"><b>${optionsGroup.name}</b> <br> Escolha até ${optionsGroup.max_quantity} opções</div>
        `;

        for (const option of optionsGroup.options) {
          if (optionsGroup.required && optionsGroup.max_quantity == 1) {
            modalProduto.innerHTML += `
              <input type="radio" id="r1" name="rr" />
              <label for="r1"><span></span> ${option.name}  <b class="float-right">${Number(option.price).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</b></label>
            `;
          } else {
            modalProduto.innerHTML += `
              <label><input type="checkbox" /><span> . </span> ${option.name} <b class="float-right">${Number(option.price).toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}</b></label>
            `;
          }
        }
      }
    }



    modalProduto.innerHTML += `
      <div class="form-group mt-4">
        <label for="exampleFormControlTextarea1"> Algum comentário? </label>
        <textarea placeholder="Ex:Tirar cebola, maionese e etc." class="formm form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <div class="d-flex justify-content-around" style="height: 45px; margin-bottom: 10px">
        <button type="button" class=" btn btn-outline-secondary" onclick="changeQtd(0)"> - </button>
        <p class="form-control text-center bg-light" style="font-size: 20px" id="qtdProduto"> 1 </p>
        <button type="button" class=" btn btn-outline-secondary" onclick="changeQtd(1)"> + </button>
      </div>

      <button type="button" class="col-md-12 btn btn-amarelo" onclick="addToBag()">
        <span class="add">Adicionar</span>
      </button>
    `;
  })
}

function addToBag() {
  let elem = modalProduto.querySelectorAll('input')

  for (const option of elem) {
    
  }
  console.log(elem[0].dataset.productid, restauranteId)
}