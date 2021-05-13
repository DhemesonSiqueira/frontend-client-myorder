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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/inicio.css" rel="stylesheet">

</head>

<style> 
/* Icons */
@font-face
{
    font-family: 'slick';
    font-weight: normal;
    font-style: normal;

    src: url('./fonts/slick.eot');
    src: url('./fonts/slick.eot?#iefix') format('embedded-opentype'), url('./fonts/slick.woff') format('woff'), url('./fonts/slick.ttf') format('truetype'), url('./fonts/slick.svg#slick') format('svg');
}
/* Arrows */
.slick-prev,
.slick-next
{
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
.slick-next:focus
{
    color: transparent;
    outline: none;
    background: transparent;
}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before
{
    opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before
{
    opacity: .25;
}

.slick-prev:before,
.slick-next:before
{
    font-family: 'slick';
    font-size: 20px;
    line-height: 1;

    opacity: .75;
    color: #000;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev
{
    left: -25px;
}
[dir='rtl'] .slick-prev
{
    right: -25px;
    left: auto;
}
.slick-prev:before
{
    content: '←';
}
[dir='rtl'] .slick-prev:before
{
    content: '→';
}

.slick-next
{
    right: -25px;
}
[dir='rtl'] .slick-next
{
    right: auto;
    left: -25px;
}
.slick-next:before
{
    content: '→';
}
[dir='rtl'] .slick-next:before
{
    content: '←';
}

/* Dots */
.slick-dotted.slick-slider
{
    margin-bottom: 30px;
}

.slick-dots
{
    position: absolute;
    bottom: -25px;

    display: block;

    width: 100%;
    padding: 0;
    margin: 0;

    list-style: none;

    text-align: center;
}
.slick-dots li
{
    position: relative;

    display: inline-block;

    width: 20px;
    height: 20px;
    margin: 0 5px;
    padding: 0;

    cursor: pointer;
}
.slick-dots li button
{
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
.slick-dots li button:focus
{
    outline: none;
}
.slick-dots li button:hover:before,
.slick-dots li button:focus:before
{
    opacity: 1;
}
.slick-dots li button:before
{
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
.slick-dots li.slick-active button:before
{
    opacity: .75;
    color: black;
}
a{
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



    

          
            
            
            <script type='text/javascript'>$(document).ready(function(){
                $('.items').slick({
                    slidesToShow: 8,
                    slidesToScroll: 3,
                   
                    
                    arrows:true,
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
            });</script>
        
       
        <!--Slick CSS-->
<link rel="stylesheet" type="text/css" href="" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<div class="items">
<div class="color-icons"><img data-lazy="img/acai.png"><p class="text-center">Açai</p></div>
<div class="color-icons"><img data-lazy="img/b.png"><p class="text-center">Lanches</p></div>
<div class="color-icons"><img data-lazy="img/pao.png"><p class="text-center">Padarias</p></div>
<div class="color-icons"><img data-lazy="img/pizza.png"><p class="text-center">Pizzas</p></div>
<div class="color-icons"><img data-lazy="img/cafeteria.png"><p class="text-center">Cafeterias</p></div>
<div class="color-icons"><img data-lazy="img/sushi.png"><p class="text-center">Japonesa</p></div>
<div class="color-icons"><img data-lazy="img/saudavel.png"><p class="text-center">Saudável</p></div>
<div class="color-icons"><img data-lazy="img/cervejaria.png"><p class="text-center">Cervejaria</p></div>
<div class="color-icons"><img data-lazy="img/vegan.png"><p class="text-center">Vegetariana</p></div>

</div>
<b>

<h5 class="ainn  mb-2">Recomendados</h5></b>
       
<!-- row>  -->
        <div class="row">


<!---->
            <div class="col-md-4 mt-2 mb-2">
              <a class="nome" href="index.php">
                <div class="card p-3">
                    <div class="d-flex flex-row mb-3 "><img class="banner" src="data:image/jpeg;base64,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" >
                    </div>
                   <span><b>Padaria Santa Clara</b></span>
                   <span> <i class=" text-danger fas fa-map-marker-alt"></i> 2 km - Padaria </span>
                </div>
               </a> 
            </div>
    
<!---->


<!---->    
            <div class="col-md-4 mt-2 mb-2">
                <div class="card p-3">
                    <div class="d-flex flex-row mb-3 "><img class="banner"  src="https://img.itdg.com.br/tdg/images/recipes/000/106/817/303394/303394_original.jpg?mode=crop&width=710&height=400">
                         </div>
                    <span><b>Shushi Loko</b></span>
                    <span> <i class=" text-danger fas fa-map-marker-alt"></i> 6 km - Sushi </span>       
                </div>
            </div>

<!---->


<!---->

            <div class="col-md-4 mt-2 mb-2">           
                <div class="card p-3">
                    <div class="d-flex flex-row mb-3 "><img class="banner" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrYZ8ojgkMwBr4WC5oo_015FR600zWrIbMCI6d8xDo7_SFtsrRT3H04pllpYt57R4EtKk&usqp=CAU">
                        </div>
                    <span><b>Batedeira X</b></span>
                    <span> <i class=" text-danger fas fa-map-marker-alt"></i> 1 km - Açai </span>           
                </div>
            </div>
<!---->







<!-- </row>  -->
</div>

</div>

<?php include_once("sacola.php"); ?>

<!---tab bar--->  
<nav class="tab">
    <a href="cards.php" class="nav__link ">
        <i class="nav__icon" ><img width="22px"  src="img/home-inicial.svg"></i>
        <span style="color: #ffc700;" >Inicio </span>     
      </a>

       <a href="pedidos.php" class="nav__link ">
        <i class="nav__icon" ><img width="22px"  src="img/list.svg"></i>
        <span>Pedidos</span>      
      </a>
    
      <a href="perfil.php" class="nav__link ">
       <i class="nav__icon" ><img width="22px"  src="img/user.svg"></i>
       <span>Perfil</span>
       
      </a>

</nav>
</body>
</html>