<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cardápio Digital - myOrder</title>
  <link rel="shortcut icon" href="./img/icon-logo-myorder.png" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/conta.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body class=" preto">
  <div class="cima">
    <a class="btn  voltar" href="./index.php">
      <i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar ao menu inicial</a>
  </div>
  <div class="content-all">
    <div class="card shadow-lg p-3 mb-5 bg-white rounded col-md-6 ">
      <div class="card-body">
        <b>
          <div class="container mt-3 ">
            <h4 class="text-center">Atualizar Perfil</h4>
          </div>
        </b>
        <div class="containerr  mb-3">
          <div class="wrapper">
            <div class="image">
              <img src="" alt="">
            </div>
            <div class="content">
              <div class="icon text-warning"><i class="fas fa-user"></i></div>
            </div>
            <div id="cancel-btn"><i class="fas fa-times"></i></div>
            <div class="file-name"> File name here </div>
          </div>
          <button onclick="defaultBtnActive()" class="mb-4 btn btn-sm btn-success" id="custom-btn">Escolha uma foto</button>
          <input id="default-btn" type="file" hidden>
        </div>

        <div class="container">
          <form>
            <div class="form-group">
              <input type="text" class="form-control mt-2 mb-2" id="nome" placeholder="Nome">
              <input type="email" class="form-control mb-2" id="email" placeholder="Email">
              <input type="password" placeholder="Senha antiga"class="form-control" id="senha"></br>
              <input placeholder="Nova senha" type="password" class="form-control" id="confirma_senha">
            </div>
            <div class="d-flex flex-column" id="barras">
              <div id="barra">Pelo menos 6 caracteres</div>
              <div id="barra_1">Pelo menos 1 letra maiúscula</div>
              <div id="barra_2">Pelo menos 1 número</div>
            </div>
            <button type="submit" class="btn btn-ama mt-2 col-md-12">Salvar alterações</button>
          </form> <br><br>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
  <script src="./js/atualizar.js"></script>


</body>

</html>