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
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/inicio.css" rel="stylesheet">

</head>

<style>
    /* Icons */
    @font-face {
        font-family: 'slick';
        font-weight: normal;
        font-style: normal;

        src: url('./fonts/slick.eot');
        src: url('./fonts/slick.eot?#iefix') format('embedded-opentype'), url('./fonts/slick.woff') format('woff'), url('./fonts/slick.ttf') format('truetype'), url('./fonts/slick.svg#slick') format('svg');
    }

    /* Arrows */
    .slick-prev,
    .slick-next {
        font-size: 0;
        line-height: 0;

        position: absolute;
        top: 50%;

        display: block;

        width: 20px;
        height: 20px;
        padding: 0;
        -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
        transform: translate(0, -50%);

        cursor: pointer;

        color: transparent;
        border: none;
        outline: none;
        background: transparent;
    }

    .slick-prev:hover,
    .slick-prev:focus,
    .slick-next:hover,
    .slick-next:focus {
        color: transparent;
        outline: none;
        background: transparent;
    }

    .slick-prev:hover:before,
    .slick-prev:focus:before,
    .slick-next:hover:before,
    .slick-next:focus:before {
        opacity: 1;
    }

    .slick-prev.slick-disabled:before,
    .slick-next.slick-disabled:before {
        opacity: .25;
    }

    .slick-prev:before,
    .slick-next:before {
        font-family: 'slick';
        font-size: 20px;
        line-height: 1;

        opacity: .75;
        color: #000;

        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .slick-prev {
        left: -25px;
    }

    [dir='rtl'] .slick-prev {
        right: -25px;
        left: auto;
    }

    .slick-prev:before {
        content: '←';
    }

    [dir='rtl'] .slick-prev:before {
        content: '→';
    }

    .slick-next {
        right: -25px;
    }

    [dir='rtl'] .slick-next {
        right: auto;
        left: -25px;
    }

    .slick-next:before {
        content: '→';
    }

    [dir='rtl'] .slick-next:before {
        content: '←';
    }

    /* Dots */
    .slick-dotted.slick-slider {
        margin-bottom: 30px;
    }

    .slick-dots {
        position: absolute;
        bottom: -25px;

        display: block;

        width: 100%;
        padding: 0;
        margin: 0;

        list-style: none;

        text-align: center;
    }

    .slick-dots li {
        position: relative;

        display: inline-block;

        width: 20px;
        height: 20px;
        margin: 0 5px;
        padding: 0;

        cursor: pointer;
    }

    .slick-dots li button {
        font-size: 0;
        line-height: 0;

        display: block;

        width: 20px;
        height: 20px;
        padding: 5px;

        cursor: pointer;

        color: transparent;
        border: 0;
        outline: none;
        background: transparent;
    }

    .slick-dots li button:hover,
    .slick-dots li button:focus {
        outline: none;
    }

    .slick-dots li button:hover:before,
    .slick-dots li button:focus:before {
        opacity: 1;
    }

    .slick-dots li button:before {
        font-family: 'slick';
        font-size: 6px;
        line-height: 20px;

        position: absolute;
        top: 0;
        left: 0;

        width: 20px;
        height: 20px;

        content: '•';
        text-align: center;

        opacity: .25;
        color: black;

        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .slick-dots li.slick-active button:before {
        opacity: .75;
        color: black;
    }

    a {
        text-decoration: none !important;
    }
</style>

<body class="preto">

    <!-- NAV BAR -->
    <?php include_once("navbar.php"); ?>
    <div class="container">
        <h3 class="ainn mt-4">Encontre o melhor <br>
            lugar para você</h3>

        <!-- INPUT DE PESQUISA-->
        <form action="">
            <div class="p-1 bg-light rounded rounded-pill shadow-sm mt-4 mb-4">
                <div class="input-group">
                    <input type="search" placeholder="Pesquise um restaurante" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                    <div class="input-group-append">
                        <button id="button-addon1" type="submit" class="btn btn-link text-warning"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <!--/ INPUT DE PESQUISA-->
        <script type='text/javascript'>
            $(document).ready(function() {
                $('.items').slick({
                    slidesToShow: 8,
                    slidesToScroll: 3,


                    arrows: true,
                    dots: false,
                    pauseOnHover: false,
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    }, {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 3
                        }
                    }]
                });
            });
        </script>

        <div class="items">
            <div class="color-icons"><img data-lazy="img/acai.png">
                <p class="text-center">Açai</p>
            </div>
            <div class="color-icons"><img data-lazy="img/b.png">
                <p class="text-center">Lanches</p>
            </div>
            <div class="color-icons"><img data-lazy="img/pao.png">
                <p class="text-center">Padarias</p>
            </div>
            <div class="color-icons"><img data-lazy="img/pizza.png">
                <p class="text-center">Pizzas</p>
            </div>
            <div class="color-icons"><img data-lazy="img/cafeteria.png">
                <p class="text-center">Cafeterias</p>
            </div>
            <div class="color-icons"><img data-lazy="img/sushi.png">
                <p class="text-center">Japonesa</p>
            </div>
            <div class="color-icons"><img data-lazy="img/saudavel.png">
                <p class="text-center">Saudável</p>
            </div>
            <div class="color-icons"><img data-lazy="img/cervejaria.png">
                <p class="text-center">Cervejaria</p>
            </div>
            <div class="color-icons"><img data-lazy="img/vegan.png">
                <p class="text-center">Vegetariana</p>
            </div>

        </div>
        <b>
            <h5 class="ainn  mb-2">Recomendados</h5>
        </b>

        <!-- row>  -->
        <div class="row">
            <div class="col-md-4 mt-2 mb-2">
                <a class="nome" href="index.php">
                    <div class="card p-3">
                        <div class="d-flex flex-row mb-3 "><img class="banner" src="./img/bannerweb.jpg">
                        </div>
                        <span><b>Padaria Santa Clara</b></span>
                        <span> <i class=" text-danger fas fa-map-marker-alt"></i> 2 km - Padaria </span>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mt-2 mb-2">
                <div class="card p-3">
                    <div class="d-flex flex-row mb-3 "><img class="banner" src="https://img.itdg.com.br/tdg/images/recipes/000/106/817/303394/303394_original.jpg?mode=crop&width=710&height=400">
                    </div>
                    <span><b>Shushi Loko</b></span>
                    <span> <i class=" text-danger fas fa-map-marker-alt"></i> 6 km - Sushi </span>
                </div>
            </div>
            <div class="col-md-4 mt-2 mb-2">
                <div class="card p-3">
                    <div class="d-flex flex-row mb-3 "><img class="banner" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrYZ8ojgkMwBr4WC5oo_015FR600zWrIbMCI6d8xDo7_SFtsrRT3H04pllpYt57R4EtKk&usqp=CAU">
                    </div>
                    <span><b>Batedeira X</b></span>
                    <span> <i class=" text-danger fas fa-map-marker-alt"></i> 1 km - Açai </span>
                </div>
            </div>
        </div>
    </div>

    <?php include_once("sacola.php"); ?>

    <!---tab bar--->
    <nav class="tab">
        <a href="cards.php" class="nav__link ">
            <i class="nav__icon"><img width="22px" src="img/home-inicial.svg"></i>
            <span style="color: #ffc700;">Inicio </span>
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
    <!--Slick CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>