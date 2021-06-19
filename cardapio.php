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
  <link rel="shortcut icon" href="./img/icon-logo-myorder.png" type="image/x-icon">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body class="preto">
  <?php include_once("navbar.php"); ?>

  <div class="mb-4 text-center" id="banner-restaurante">
    
  </div>

  <div class="container preto" id="info-restaurante">
    <!-- <div class="mb-2"><i class="far fa-clock"></i> <span>12:00 às 14:00</span> <span class="float-right"><a class="a" href="#" data-toggle="modal" data-target="#exampleModalCennter">Ver mais detalhes</a></span></div> -->

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

  <div class="container" id="conteiner-cardapio">
    
  </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenterr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <span aria-hidden="true" data-dismiss="modal"><i class="fas fa-close"></i></span>
          </div>
          <div class="modal-body" id="modal-produto">

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
  <script src="./bootstrap-number-input.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="./js/cardapioRestaurante.js"></script>
</body>

</html>