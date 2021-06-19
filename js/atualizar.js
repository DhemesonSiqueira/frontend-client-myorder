const wrapper = document.querySelector(".wrapper");
const user = JSON.parse(localStorage.getItem("user"));
const fileName = document.querySelector(".file-name");
const defaultBtn = document.querySelector("#default-btn");
const customBtn = document.querySelector("#custom-btn");
const cancelBtn = document.querySelector("#cancel-btn i");
const img = document.querySelector("img");
let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

img.src = user.image;

function defaultBtnActive() {
  defaultBtn.click();
}
defaultBtn.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function () {
      const result = reader.result;
      img.src = result;
      wrapper.classList.add("active");
    };
    cancelBtn.addEventListener("click", function () {
      img.src = "";
      wrapper.classList.remove("active");
    });
    reader.readAsDataURL(file);
  }
  if (this.value) {
    let valueStore = this.value.match(regExp);
    fileName.textContent = valueStore;
  }
});

document.addEventListener("DOMContentLoaded", function () {
  document.forms[0].onsubmit = function (e) {
    e.preventDefault();
    return val(e);
  };

  senha.oninput = function (e) {
    val(e);
  };

  function val(e) {
    var passo,
      passo1,
      passo2,
      v = senha.value,
      cor = "#fff",
      e = e.type == "submit";

    // verifica se tem 6 caracteres ou mais
    if (v.match(/.{6,}/)) {
      barra.style.color = "#1cc88a";
      passo = true;
    } else {
      barra.style.color = "#000";
      passo = false;
    }

    // verifica se tem ao menos uma letra maiúscula
    if (v.match(/[A-Z]{1,}/)) {
      barra_1.style.color = "#1cc88a";
      passo1 = true;
    } else {
      barra_1.style.color = "#000";
      passo1 = false;
    }

    // verifica de tem ao menus um número
    if (v.match(/[0-9]{1,}/)) {
      barra_2.style.color = "#1cc88a";
      passo2 = true;
    } else {
      barra_2.style.color = "#000";
      passo2 = false;
    }

    // o formulário só será enviado pelo evento submit
    // e todos os passos devem ser verdadeiros para validar
    if (passo && passo1 && passo2 && v == confirma_senha.value && e) {
      alert("Vamos lhe enviar um código de confirmação!");
      return true;
    } else if (e) {
      alert("Senha inválida ou não conferem");
      return false;
    }
  }
});


var inome = document.getElementById("nome")
var iemail = document.getElementById("email")

inome.value = user.name;
iemail.value = user.email;