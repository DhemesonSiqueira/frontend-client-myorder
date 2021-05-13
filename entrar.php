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
    <link href="css/entrar.css" rel="stylesheet">
    

</head>



<body class=" bg-light preto">







<div class="cima" >

<a href="cards.php"><img class="icon-logo" src="auge2.png" class="logo"  alt=""></a>

</div>
<div class="container">

<!--
    <div class="alert alert-danger" role="alert">
        Senha ou email errado!
      </div>
-->

      <div class="card shadow-lg p-3 mb-5 bg-white rounded col-md-6 ">
  <div class="card-body">
   

    <form action="" class="form">
       
<p class="text-center">
            <img src="auge.png" class="logo" width="50%" alt="">
        </p>
        <input type="email" required class="form-control mb-2" placeholder="Email" >
      
        <div id="input">
        <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">
<input class="form-control mb-2" placeholder="Senha" type="password" id="pass">
</div>

        <button class="btn btn-ama col-md-12 mb-2">Entrar</button>

        <a class="btn btn-cinza text-dark col-md-12"href="conta.php">Criar Conta</a>
        
        <div class="text-center mt-2">
        <span class=""><a href="confimar.php">Esqueceu senha?</a> </span>
    </div>
    </form>

</div>
</div>

</div>



<script>

var input = document.querySelector('#input input');
var img = document.querySelector('#input img');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 'password' : 'text';
});

</script>

<!---tab bar--->  

<nav class="tab">

    <nav class="tab">
        <a style="color: #000;"  href="cards.php" class="nav__link ">
            <i class="nav__icon" ><img width="22px"  src="img/home.svg"></i>
            <span>Inicio </span>
        
        
          
          </a>
    
           <a style="color: #000;" href="pedidos.php" class="nav__link ">
            <i class="nav__icon" ><img width="22px"  src="img/list.svg"></i>
            <span>Pedidos</span>
        
        
          
          </a>
        
          <a href="perfil.php" class="nav__link ">
           <i class="nav__icon" ><img width="22px"  src="img/user-user.svg"></i>
           <span style="color: #ffc700;" >Perfil</span>
           
          </a>
    
    </nav>

</nav>







</body>

</html>