<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cardápio Digital - myOrder</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/conta.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    

</head>

<style>
  

</style>

<body class=" preto">
<div class="cima" >
 
<a class="btn  voltar" href="cards.php"> 
<i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar ao menu inicial</a>

</div>

   
<div class="card shadow-lg p-3 mb-5 bg-white rounded col-md-6 ">
  <div class="card-body">
<b><div class="container mt-3 "><h4 class="text-center" >Cadastro</h4></div></b>




    <div class="containerr  mb-3">
    <div class="wrapper">
      <div class="image">
        <img src="" alt="">
      </div>
<div class="content">
        <div class="icon text-warning">
<i class="fas fa-user"></i></div>

</div>
<div id="cancel-btn">
<i class="fas fa-times"></i></div>
<div class="file-name">
File name here</div>
</div>
<button onclick="defaultBtnActive()" class="mb-4 btn btn-sm btn-success" id="custom-btn">Escolha uma foto</button>
    <input id="default-btn" type="file" hidden>
  </div>





    

<div class="container">

<script>document.addEventListener("DOMContentLoaded", function(){

  document.forms[0].onsubmit = function(e){
     return val(e);
  }

  senha.oninput = function(e){
     val(e);
  }

  function val(e){

     var passo, passo1, passo2,
     v = senha.value,
     cor = "#fff",
     e = e.type == "submit";
  
     // verifica se tem 6 caracteres ou mais
     if(v.match(/.{6,}/)){
        barra.style.color = "#1cc88a";
        passo = true;
     }else{
        barra.style.color = "#000";
        passo = false;
     }

     // verifica se tem ao menos uma letra maiúscula
     if(v.match(/[A-Z]{1,}/)){
        barra_1.style.color = "#1cc88a";
        passo1 = true;
     }else{
        barra_1.style.color = "#000";
        passo1 = false;
     }

     // verifica de tem ao menus um número
     if(v.match(/[0-9]{1,}/)){
        barra_2.style.color = "#1cc88a";
        passo2 = true;
     }else{
        barra_2.style.color = "#000";
        passo2 = false;
     }

     // o formulário só será enviado pelo evento submit
     // e todos os passos devem ser verdadeiros para validar
     if(passo && passo1 && passo2 && v == confirma_senha.value && e){
        alert("Vamos lhe enviar um código de confirmação!");
        return true;
     }else if(e){
        alert("Senha inválida ou não conferem");
        return false;
     }
  }
});</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<form action="confimar.html">
   <div class="form-group">
    <input type="text" required class="form-control mt-2 mb-2" placeholder="Nome" >
        <input type="email" required class="form-control mb-2" placeholder="Email" >
        <input type="text" data-mask="(00) 00000-0000" required class="form-control mb-2" placeholder="Celular" >
     <input type="password" placeholder="Senha" class="form-control" id="senha"></br>
     <div class="row" id="barras">
       <div id="barra" class="col-md-3">Pelo menos 6 caracteres</div>
       <div id="barra_1" class="col-md-3">Pelo menos 1 letra maiúscula</div>
       <div id="barra_2" class="col-md-3">Pelo menos 1 número</div>
     </div>
   </div>
   <div class="form-group">
     
     <input placeholder="Confirmar senha" type="password" class="form-control" id="confirma_senha">
   </div>
  


   <div>
    <label for='codigo'>Enviar código de confrimação para:</label><br>
    <input type='radio' name='codigo' value='y' required id='codigo'> 
    <label for="">Email</label>
<br>
<input type='radio' name='codigo' value='n'>
    <label for="">Celular (SMS)</label>

  </div>








   <button class="btn btn-ama mt-2 col-md-12">Cadastrar</button>         
 </form>











    <br><br>

</div>

</div>
</div>
<script>
  const wrapper = document.querySelector(".wrapper");
  const fileName = document.querySelector(".file-name");
  const defaultBtn = document.querySelector("#default-btn");
  const customBtn = document.querySelector("#custom-btn");
  const cancelBtn = document.querySelector("#cancel-btn i");
  const img = document.querySelector("img");
  let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
  function defaultBtnActive(){
    defaultBtn.click();
  }
  defaultBtn.addEventListener("change", function(){
    const file = this.files[0];
    if(file){
      const reader = new FileReader();
      reader.onload = function(){
        const result = reader.result;
        img.src = result;
        wrapper.classList.add("active");
      }
      cancelBtn.addEventListener("click", function(){
        img.src = "";
        wrapper.classList.remove("active");
      })
      reader.readAsDataURL(file);
    }
    if(this.value){
      let valueStore = this.value.match(regExp);
      fileName.textContent = valueStore;
    }
  });
</script>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
 



</body>

</html>