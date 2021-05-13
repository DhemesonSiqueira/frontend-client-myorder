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
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css">

</head>

<body class="preto">
  <?php include_once("navbar.php"); ?>

  <div class="mb-4 text-center">
    <h3><img class="foto-perfil" src="data:image/jpeg;base64,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"></h3>
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
    <?php include_once("sacola.php"); ?>
    <!---tab bar--->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <nav class="tab">
      <a href="cards.php" class="nav__link ">
        <i class="nav__icon"><img width="22px" src="img/home.svg"></i>
        <span>Inicio </span>
      </a>

      <a href="pedidos.php" class="nav__link ">
        <i class="nav__icon"><img width="22px" src="img/list.svg"></i>
        <span>Pedidos</span>
      </a>

      <a href="perfil.php" class="nav__link ">
        <i class="nav__icon"><img width="22px" src="img/user.svg"></i>
        <span>Perfil</span>

      </a>

    </nav>


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
</div>

</html>