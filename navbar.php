<nav class="navbar nav navbar-expand-lg navbar-red navbar-dark mb-4 ">
  <div class="wrapper"> </div>
  <div class="container-fluid all-show"> <a class="navbar-brand" href="./index.php"><img src="auge.png" width="120px" height="33px" alt=""></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

        <li class="nav-item"> <a class="nav-link" href="./index.php">Inicio</a> </li>
        <li class="nav-item"> <a class="nav-link" href="seja-parceiro/index.html">Adicione seu restaurante</a> </li>

        <!-- <li class="nav-item"> <a class="nav-link" href="entrar.php"> Entre</a> </li>
        <li class="nav-item"> <a class="nav-link" href="conta.php"> Cadastra-se</a> </li> -->

        <div class="dropdown">
          <button class="btn oo dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> Thais
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a href="perfil.php" class="dropdown-item"> <i class="fas fa-user"></i> Thais Brito </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"> <i class="fas fa-user-edit"></i> Editar informações</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Sair</a>
          </div>
        </div>
      </ul>

      <style>
        .nav {
          z-index: 5;
          width: 100vw;
        }

        .profile {
          border-radius: 50%;
          width: 50px;
        }

        .dropdown-menu {
          z-index: 10;
        }

        .oo {
          color: #000;
        }

        .pedidox {
          width: 400px !important;
          height: 200px;
          margin-left: -235px !important;
        }

        .wrapper {
          width: 100%;
          position: absolute;
          height: 100%;
          background-color: #ffc700;
          clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 71% 100%);
          transition: 1s all
        }

        .bb {
          background-color: #ffc700;
          color: #000;
        }

        .card {
          color: #000;
        }
      </style>

      <div class="d-flex flex-column sim "><span>

          <!-- Example single danger button -->
          <div class="btn-group">
            <button type="button" class="btn oo dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img style="margin-top:16px" width="30px" src="./img/order-icon.png"> <br>
              SEU PEDIDO (1)
            </button>


            <div class="dropdown-menu pedidox">

              <!-- <p class="text-center corpo ">
                <br><br><br><br>
                <img src="img/icone.png" width="35%" alt="">
                <br>
                <b>Você ainda não pediu no myOrder! :(</b> <br>
                <span>Experimente os melhores restaurantes</span>
              </p> -->

              <div class="">
                <div class="row">
                  <div class="col-md-12">
                    <form action="detalhes.php">
                      <div class="card shadow-sm p-3 mb-2">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row align-items-center">
                            <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                            <div class="ms-2 c-details">
                              <h6 class="mb-0">Lanches do Louro</h6> <span>Pedido em andamento <i class=" text-warning fas fa-circle"></i> </span>
                            </div>
                          </div>
                          <div class="badge"> <span>Lanches</span> </div>
                        </div>
                        <hr>
                        <div class="mt-0">
                          <div>1 <span>Bolo gordo</span></div>
                          <b>e mais 3</b>
                        </div>
                        <button class="btn mt-2 bb ">Ver detalhes do pedido</button>
                    </form>
                  </div>
                  <!--end row -->
                </div>
              </div>
            </div>
        </span>
      </div>
    </div>
  </div>
</nav>