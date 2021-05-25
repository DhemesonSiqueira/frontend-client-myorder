var bannerRestaurante = document.getElementById("banner-restaurante");
var infoRestaurante = document.getElementById("info-restaurante");

const params = new URL(document.location).searchParams;
const restauranteId = params.get("id");

console.log(restauranteId)

async function getRestaurante(id) {
  const response = await axios.get(`http://localhost:3000/restaurants/${id}`);

  return response.data;
}

const restaurantes = getRestaurante(restauranteId);

restaurantes.then(res => { 

  for (const restaurante of res) {
    
    bannerRestaurante.innerHTML += `
    <div class="col-md-4 mt-2 mb-2">
      <a class="nome" href="index.php">
        <div class="card p-3">
            <div class="d-flex flex-row mb-3 "><img class="banner" src="${ restaurante.image || "./img/bannerweb.jpg" }"></div>
            <span><b>${restaurante.name}</b></span>
        </div>
      </a>
    </div>`;

  }

});
