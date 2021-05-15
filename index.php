<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Cardápio digital para restaurantes, bares, sorveterias. Pedido online">
  <meta name="author" content="myOrder">
  <meta name="keywords" content="cardapio, digital, pedido, online, bar, bares, restaurantes, restaurante, barato, grátis, acessível, myorder, my order">

  <title>Cardápio Digital - myOrder</title>

  <link href="./css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/index.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body class="preto">
  <?php include_once("navbar.php"); ?>

  <div class="mb-4 text-center">
    <h3><img class="foto-perfil" src="./img/bannerweb.jpg"></h3>
  </div>

  <div class="container preto">
    <h4 class="nome-local mb-2">Padaria Santa Clara</h4>
    <div class="mb-2"><i class="fas fa-map-marker-alt"></i> <span>Felipe Camarão, Novo Buritizal - 503</span></div>
    <div class="mb-2"><i class="far fa-clock"></i> <span>12:00 às 14:00</span> <span class="float-right"><a class="a" href="#" data-toggle="modal" data-target="#exampleModalCennter">Ver mais detalhes</a></span></div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCennter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTtitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTtitle">Detalhes do estabelecimento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="mb-2"><i class="fas fa-map-marker-alt"></i> <span>Felipe Camarão, Novo Buritizal - 503</span></div>
            <div class="mb-2"><i class="far fa-calendar"></i> <span>DOM</span> <span>12:00 às 14:00</span> </div>
            <div class="mb-2"><i class="far fa-calendar"></i> <span>SEG</span> <span>12:00 às 14:00</span> </div>
            <div class="mb-2"><i class="far fa-calendar"></i> <span>SEX</span> <span>12:00 às 14:00</span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="mb-4">

  <div class="container">
    <h5 class="mb-4 ">Categorias 1</h5>
    <!--start row-->
    <div class="row">
      <div class="col-md-4 mb-4 ">
        <a href="#exampleModalCenterr" data-toggle="modal" data-target="#exampleModalCenterr">
          <div class="card p-3">
            <div class="d-flex flex-row mb-3"><img src="https://www.cidadeoferta.com.br/storage/offers/8402-sonia-venancio-bolos-3.jpg" width="70" height="70">
              <div class="d-flex flex-column ml-2"><span>Bolo</span><span class="text-black-50">lorem impsu lorem lorem...</span>
                <span class="float-left">R$0,00</span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-4 ">
        <a href="#exampleModalCenterr" data-toggle="modal" data-target="#exampleModalCenterr">
          <div class="card p-3">
            <div class="d-flex flex-row mb-3"><img src="https://www.cidadeoferta.com.br/storage/offers/8402-sonia-venancio-bolos-3.jpg" width="70" height="70">
              <div class="d-flex flex-column ml-2"><span>Bolo</span><span class="text-black-50">lorem impsu lorem lorem...</span>
                <span class="float-left">R$0,00</span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-4 ">
        <a href="#exampleModalCenterr" data-toggle="modal" data-target="#exampleModalCenterr">
          <div class="card p-3">
            <div class="d-flex flex-row mb-3"><img src="https://www.cidadeoferta.com.br/storage/offers/8402-sonia-venancio-bolos-3.jpg" width="70" height="70">
              <div class="d-flex flex-column ml-2"><span>Bolo</span><span class="text-black-50">lorem impsu lorem lorem...</span>
                <span class="float-left">R$0,00</span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <!--end row-->
    </div>

    <h5 class="mb-4 ">Categorias 1</h5>
    <div class="row">
      <div class="col-md-4 mb-4 ">
        <div class="card p-3">
          <div class="d-flex flex-row mb-3"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCwYXykzcXAnBJG0J2NIeG43POVZHJo0ryh8trbgxy7023J5v54IbnumIncnwvmJ1vs6s&usqp=CAU" width="70" height="70">
            <div class="d-flex flex-column ml-2"><span>Pão</span><span class="text-black-50">lorem impsu lorem lorem...</span>
              <span class="float-left">R$0,00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 ">
        <div class="card p-3">
          <div class="d-flex flex-row mb-3"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCwYXykzcXAnBJG0J2NIeG43POVZHJo0ryh8trbgxy7023J5v54IbnumIncnwvmJ1vs6s&usqp=CAU" width="70" height="70">
            <div class="d-flex flex-column ml-2"><span>Pão</span><span class="text-black-50">lorem impsu lorem lorem...</span>
              <span class="float-left">R$0,00</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 ">
        <div class="card p-3">
          <div class="d-flex flex-row mb-3"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCwYXykzcXAnBJG0J2NIeG43POVZHJo0ryh8trbgxy7023J5v54IbnumIncnwvmJ1vs6s&usqp=CAU" width="70" height="70">
            <div class="d-flex flex-column ml-2"><span>Pão</span><span class="text-black-50">lorem impsu lorem lorem...</span>
              <span class="float-left">R$0,00</span>
            </div>
          </div>
        </div>
      </div>
      <!--fim row-->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenterr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <span aria-hidden="true" data-dismiss="modal"><i class="fas fa-close"></i></span>
          </div>
          <div class="modal-body">
            <div class="mb-4 text-center">
              <h3><img width="100%" src="https://www.cidadeoferta.com.br/storage/offers/8402-sonia-venancio-bolos-3.jpg" alt=""></h3>
            </div>
            <h4 class="nome-local mb-2">Bolo</h4>
            <div class="mb-2"><span>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span></div>
            <div class="bg-light">Escolha sua opção <br><b>2 opções</b></div>
            <label><input type="checkbox" /><span>.</span> Option 1 <b class="float-right">R$4,00</b></label>
            <label><input type="checkbox" /><span>.</span> Option 2 <b class="float-right">R$4,00</b></label>
            <label><input type="checkbox" /><span>.</span> Option 3 <b class="float-right">R$4,00</b></label>
            <div class="bg-light">Escolha sua opção <br><b>1 opções</b></div>
            <input type="radio" id="r1" name="rr" />
            <label for="r1"><span></span>Radio Button 1 <b class="float-right">R$4,00</b></label>
            <input type="radio" id="r2" name="rr" />
            <label for="r2"><span></span>Radio Button 2 <b class="float-right">R$4,00</b></label>
            <div class="form-group mt-4">
              <label for="exampleFormControlTextarea1">Algum comentário?
              </label>
              <textarea placeholder="Ex:Tirar cebola, maionese e etc." class="formm form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
              <input id="colorful" class="ei bg-light form-control" type="number" value="1" min="1" max="10" />
            </div>
            <button type="button" class="col-md-12 btn btn-amarelo"> <span class="add">Adicione</span><span class=" float-right">R$00,00</span> </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once("sacola.php"); ?>

  <!---tab bar--->
  <?php include_once("./tabbar.php"); ?>

  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="bootstrap-number-input.js"></script>
  <script>
    // Remember set you events before call bootstrapSwitch or they will fire after bootstrapSwitch's events
    $('#after').bootstrapNumber();
    $('#colorful').bootstrapNumber({
      upClass: 'light',
      downClass: 'light'
    });
  </script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>