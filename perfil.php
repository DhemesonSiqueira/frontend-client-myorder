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
    <link rel="stylesheet" href="./css/perfil.css">
</head>

<body class=" preto">
    <?php include_once("navbar.php"); ?>

    <div id="notAuth" class="">
        <div class="tudo">
            <div class=" text-center bg-light ">
                <br>
                <img class="perfil" src="./img/user.png">
                <br> <br>
                <b>Thais de Brito Espíndola </b><br>
                <a href="./conta.php" class="btn btn-warning">Editar Perfil</a>
                <br> <br>
            </div>
        </div>

        <div class="container">
            <br>
            <p><b>Detalhes</b></p>
            <i class=" icon far fa-user"></i><span class="m">Thais de Brito Espíndola</span><br><br>
            <i class=" icon far fa-envelope"></i><span class="m">thaisbrito0917@gmail.com</span> <br><br>
            <i class="icon fas fa-egg"></i> <span class="m"><a href="./entrar.php">Adicione seu restaurante</a> </span><br><br>
            <i class="icon fas fa-sign-out-alt"></i> <span onclick="logout()" class="m"><a href="">Sair</a></span>
        </div>
    </div>
    <!---tab bar--->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php include_once("./tabbar.php"); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        if (!localStorage.hasOwnProperty("usertoken")) {
            var divNoAuth = document.getElementById("notAuth")
            divNoAuth.innerHTML = `
                <p class="text-center">
                    <a href="./index.php">
                        <img src="./auge.png" class="logo" width="50%">
                    </a>
                </p>
                <h3 class="spc"> Ainda não tem uma conta? </h3>
                <a class="btn btn-ama" href="./conta.php">Criar Conta</a>
                <a class="btn btn-cinza text-dark" href="./entrar.php">Entrar</a>
            `;

            divNoAuth.classList.add("section-login")
        }

        function logout() {
            localStorage.removeItem("usertoken")
            location.reload()
        }
    </script>
</body>

</html>