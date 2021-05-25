// const config = {
//     headers: {
//       Authorization: "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpYXQiOjE2MjE4MjMxODMsImV4cCI6MTYyMTkwOTU4Mywic3ViIjoiMjQzZTQ2ZjgtZmM1NC00MGY2LWFhMzMtZmVlM2FlODY5MGYyIn0.pSqcMtGkVvOP-j0vDOaq3rFQqWF-SLgE0seRHTdEsyQ"
//     }
// }

var containerRestaurantes = document.getElementById("containerRestaurantes");

async function getRestaurantes() {
  const response = await axios.get('http://localhost:3000/restaurants');

  return response.data;
}

const restaurantes = getRestaurantes(); 

restaurantes.then(res => { 

  for (const restaurante of res) {
    
    containerRestaurantes.innerHTML += `
    <div class="col-md-4 mt-2 mb-2">
      <a class="nome" href="index.php?id=${restaurante.id}">
        <div class="card p-3">
            <div class="d-flex flex-row mb-3 "><img class="banner" src="${ restaurante.image || "./img/bannerweb.jpg" }"></div>
            <span><b>${restaurante.name}</b></span>
        </div>
      </a>
    </div>`;

  }

});
