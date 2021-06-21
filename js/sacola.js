var conteinerItens = document.getElementById("conteiner-itens");
const bagItens = JSON.parse(localStorage.getItem("bagitens"));
document.getElementById("qtditens").innerText = bagItens.orderItens.length;
document.getElementById("totalOrder").innerText = `Valor total: ${Number(
  bagItens.price
).toLocaleString("pt-br", { style: "currency", currency: "BRL" })}`;

for (const item of bagItens.orderItens) {
  conteinerItens.innerHTML += `
        <div class="bg-light comments-box p-3 mt-3">
            <div class="d-flex justify-content-between align-items-center">
                <h6 style="width: 40%;">${item.name} <br>
                ${item.options.map((option) => {
                  return `<span class="text-muted" style="font-size: 12px;"> ${option.name} </span>`;
                })}
                </h6><br>
               
                <div class="text-center">${item.quantity}x</div>
                <div class="text-center">${item.price.toLocaleString("pt-br", {
                  style: "currency",
                  currency: "BRL",
                })}</div>
                <span>
                    <div class="btn-group">
                        <a class="btn" data-toggle="dropdown" href="#">
                        <img src="https://image.flaticon.com/icons/png/512/64/64576.png" width="15px" alt="">
                        <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                        <div class="dropdown-item" style="cursor: pointer;" >Editar item</div>
                        <div class="dropdown-item" data-idproduto="${
                          item.product_id
                        }" style="cursor: pointer;" onclick="removerItem(this)">Remover item</div>
                        </ul>
                    </div>
                </span>
            </div>
        </div>
    `;
}

function removerItem(element) {
  productId = element.dataset.idproduto;

  indexProduct = bagItens.orderItens.findIndex((item) => {
    return item.product_id == productId;
  });

  bagItens.price -= bagItens.orderItens[indexProduct].price;
  bagItens.orderItens.splice(indexProduct, 1);
  localStorage.setItem("bagitens", JSON.stringify(bagItens));
  var sizeBag = JSON.parse(localStorage.getItem("bagitens"));

  document.getElementById("qtditens").innerText = sizeBag.orderItens.length;
  console.log(sizeBag);
  document.getElementById("totalOrder").innerText = `Valor total: ${Number(
    sizeBag.price
  ).toLocaleString("pt-br", { style: "currency", currency: "BRL" })}`;

  if (bagItens.orderItens.length === 0) {
    conteinerItens.innerHTML = `
            <p class="text-center corpo container">
                <img src="img/icone.png" width="35%" alt="">
                <br>
                <b>Você ainda não pediu no myOrder! :(</b> <br>
                <span>Experimente os melhores restaurantes</span>
            </p>
        `;

    document.getElementById("footer-bag").innerHTML = "";
  } else {
    element.parentNode.parentNode.parentNode.parentNode.parentNode.outerHTML =
      "";
  }
}

function hasItem() {
  if (localStorage.hasOwnProperty("bagitens")) {
    let sizeItens = JSON.parse(localStorage.getItem("bagitens"));

    if (sizeItens.orderItens.length === 0) {
      conteinerItens.innerHTML = `
            <p class="text-center corpo container">
                <img src="img/icone.png" width="35%" alt="">
                <br>
                <b>Você ainda não pediu no myOrder! :(</b> <br>
                <span>Experimente os melhores restaurantes</span>
            </p>    
        `;

      document.getElementById("footer-bag").innerHTML = "";
    }
  } else {
    conteinerItens.innerHTML = `
            <p class="text-center corpo container">
                <img src="img/icone.png" width="35%" alt="">
                <br>
                <b>Você ainda não pediu no myOrder! :(</b> <br>
                <span>Experimente os melhores restaurantes</span>
            </p>    
    `;
    document.getElementById("footer-bag").innerHTML = "";
    document.getElementById("qtditens").innerText = "";
  }
}

function clearBag() {
  let isConfirm = confirm("Deseja limpar a sacola?");
  if (isConfirm) {
    localStorage.removeItem("bagitens");
    hasItem();
  }
}

function socketConection() {
  const socket = io("http://localhost:3000");
  var codmesa = document.getElementById("codmesa").value;

  var dataPedido = new Date();
  var dia = dataPedido.getDate();
  var mes = dataPedido.getMonth();
  var ano4 = dataPedido.getFullYear();
  var hora = dataPedido.getHours();
  var min = dataPedido.getMinutes();
  var seg = dataPedido.getSeconds();

  var str_data = dia + "/" + (mes + 1) + "/" + ano4;
  var str_hora = hora + ":" + min + ":" + seg;

  const data = {
    table: codmesa,
    status: "Pendente",
    dia: str_data + " - " + str_hora,
    number: getRandom(),
    user: JSON.parse(localStorage.getItem("user")),
    order: JSON.parse(localStorage.getItem("bagitens")),
  };

  socket.on("connect", () => {
    console.log(socket.id);

    socket.emit("pedido_do_cliente", data);
  });

  // location.href = `http://localhost/frontend-client-myorder/pedidos.php?num=${number}`
}

function getRandom() {
  return Math.floor(Math.random() * 65536);
}
