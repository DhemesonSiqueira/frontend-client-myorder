var bannerRestaurante = document.getElementById("banner-restaurante");
var infoRestaurante = document.getElementById("info-restaurante");
var contCardapio = document.getElementById("conteiner-cardapio");

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
  for (const product of products) {
      console.log(product)
      // contCardapio.innerHTML += `
      //   <h3><img class="foto-perfil" src="${restaurante.image || "./img/bannerweb.jpg"}"></h3>
      // `;
    }
});
