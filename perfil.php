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

</head>
<style>
    .ainn {
        font-weight: bold;
    }

    .preto {
        color: #000;
    }

    .card {

        border: none;
        border-radius: 10px;
        background-color: rgba(245, 245, 245, 1);
    }

    .btn-ama {
        background-color: #ffc700;
        color: #fff;
    }

    .w {
        background-color: #ffc700;
        border-radius: 0 0 30px 30px;
    }

    .a {
        color: #000;
    }

    .a:hover {
        color: #ffc700;
    }

    .e {
        color: #ffc700;
    }

    .m {

        padding: 10px;

    }

    .perfil {
        border-radius: 50%;
        width: 20%;
        height: 200px;
    }

    .tab {
        display: none;
    }

    .icon {
        color: #ffc700;
    }

    a {
        color: #000 !important;
    }

    /*NAV BAR */

    .nav {
        position: fixed;
        width: 100%;
    }

    .navbar-nav>li>a {
        text-transform: uppercase;
        font-size: 12px;
        margin-right: 20px;
        color: #fff
    }

    .navbar-toggler {
        padding: .20rem .50rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid white
    }

    .nav-link {
        color: #000 !important
    }

    .wrapper {
        width: 100%;
        position: absolute;
        height: 100%;
        background-color: #ffc700;
        clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 71% 100%);
        transition: 1s all
    }

    .navbar-brand {
        color: #fff;
        font-family: 'Allerta Stencil', sans-serif;
        margin-bottom: 4px;
        font-size: 27px
    }

    .navbar-red:hover .wrapper {
        clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 65% 100%)
    }

    .navbar-brand:hover {
        color: #000
    }

    .navbar-red {
        background-color: rgba(245, 245, 245, 1);
        color: #000;
    }

    .all-show {
        z-index: 10
    }

    a {
        text-decoration: none !important;
    }

    .tudo {
        margin-top: -20px;
    }

    @media only screen and (max-width: 800px) {


        .perfil {
            border-radius: 50%;
            width: 35%;
            height: 105px;
        }

        .nav {
            display: none;
        }

        body {
            margin: 0 0 55px 0;
        }

        .tab {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 55px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
            background-color: #ffffff;
            display: flex;
            overflow-x: auto;
        }

        .nav__link {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            min-width: 50px;
            overflow: hidden;
            white-space: nowrap;
            font-family: sans-serif;
            font-size: 13px;
            color: #444444;
            text-decoration: none;
            -webkit-tap-highlight-color: transparent;
            transition: background-color 0.1s ease-in-out;
        }

        .nav__link:hover {
            background-color: #eeeeee;
        }

        .nav__link--active {
            color: #009578;
        }

        .nav__icon {
            font-size: 18px;
        }

        .tudo {
            margin-top: -100px;
        }
    }

    .aaa {
        border: none;
    }
</style>

<body class=" preto">
    <?php include_once("navbar.php"); ?>

    <div class="tudo">

        <div class=" text-center bg-light  ">
            <br>

            <img class="perfil" src="https://image.freepik.com/fotos-gratis/mulher-jovem-sorrindo-alegre-conceito_53876-86699.jpg" alt="">
            <br> <br>
            <b>Thais de Brito Espíndola </b>
            <p>thaisbrito0917@gmail.com</p>
            <a href="" class="btn btn-warning">Editar Perfil</a>
            <br> <br>
        </div>

    </div>

    <div class="container">
        <br>
        <p><b>Detalhes</b></p>
        <i class=" icon far fa-user"></i><span class="m">Thais de Brito Espíndola</span><br><br>
        <i class=" icon far fa-envelope"></i><span class="m">thaisbrito0917@gmail.com</span> <br><br>
        <i class="icon fas fa-mobile-alt"></i> <span class="m">96991207512</span> <br><br>
        <i class="icon fas fa-egg"></i> <span class="m"><a href="entrar.php">Adicione seu restaurante</a> </span><br><br>
        <i class="icon fas fa-sign-out-alt"></i> <span class="m"><a href="entrar.php">Sair</a></span>
    </div>

    <!---tab bar--->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?php include_once("./tabbar.php"); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>