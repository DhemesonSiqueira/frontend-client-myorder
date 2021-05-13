


<style>

.corpo{
    margin-top: 50%;
}
.preto{
    color: #000;
}

@media only screen and (max-width: 800px) {
  .foto-perfil{
      width: 100%;
      height: 170px;
  }
  body {
    margin: 0 0 55px 0;
}
a{  color: #000;
    text-decoration: none;
    }

.nav{
    display: none;
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
.br{
    display: none;
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
    color: #000;
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
}
</style>






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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/pedidos.css" rel="stylesheet">
   
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>
</head>



<body>
                              
                          

<!--

<p class="text-center corpo container">
<img src="img/icone.png" width="35%" alt="">
<br>
<b>Você ainda não pediu no myOrder! :(</b> <br>
<span>Experimente os melhores restaurantes</span>


</p>


-->



     <div class="details"><div class="container  mt-3 "> <a href="cards.php"><i class=" seta fas fa-angle-left float-left"></i></a> <h4 class="text-center" >Detalhes do pedido</h4></div></div>                      


                            <div class="container mt-5 mb-3">
                                
    <div class="row">

      <div class="col-md-12">
          

      
            <div class=" p-12 col-md-12  mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <i class="fas fa-egg"></i></div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0">Panificadora Santa Clara</h6> 
                        </div>
                    </div>
                   
                </div>
                
                


            <h5 class="mt-4">Pedido: Mesa 45</h5>
            <hr>
            
            <div>
            <span>1</span> Fricassê de Frango <span class="float-right">R$12,00</span>
            <div><small>Frango verde <span class="float-right">R$12,00</span> </small></div>
            <div><small>Frango verde <span class="float-right">R$12,00</span> </small></div>  
            <hr>
            </div>

            <div>
            1 Fricassê de Frango <span class="float-right">R$12,00</span>
            <hr>
            </div>

           


            <div class="mb-2">
            <span>Subtotal</span> <span class="float-right">R$ 24</span>
              </div>


              <div class="mb-2">
            <span>Adicionais</span> <span class="float-right">R$ 6</span>
              </div>


              <div class="mb-2">
                  <b>
            <span>Total</span> <span class="float-right ">R$ 30</span></b>
</div>

            </div>
     
       
 <!--end row -->           
</div>


<!---tab bar--->  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<nav class="tab">
    <a  href="cards.php" class="nav__link ">
        <i class="nav__icon" ><img width="22px"  src="img/home.svg"></i>
        <span>Inicio </span>
    
    
      
      </a>

       <a class="nav__link ">
        <i class="nav__icon" ><img width="22px"  src="img/list-list.svg"></i>
        <span style="color: #ffc700;" >Pedidos </span>
    
    
      
      </a>
    
      <a href="perfil.php" class="nav__link ">
       <i class="nav__icon" ><img width="22px"  src="img/user.svg"></i>
       <span>Perfil</span>
       
      </a>

</nav>








</body>

</html>