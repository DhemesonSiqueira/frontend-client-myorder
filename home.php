<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cardápio Digital - myOrder</title>
    <?php include("./head.php") ?>
</head>

<body class="preto">
    <!-- NAV BAR -->
    <?php include_once("navbar.php"); ?>
    <div class="container">
        <h3 class="ainn mt-4">Encontre o melhor <br>lugar para você</h3>
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
            <h5 class="ainn mb-2">Recomendados</h5>
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
    <?php include_once("./tabbar.php"); ?>


</body>

</html>