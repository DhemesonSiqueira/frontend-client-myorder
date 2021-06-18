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
    <link href="css/pedidos.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
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
    <div class="details">
        <div class="container  mt-3 "> <a href="./index.php"><i class="seta fas fa-angle-left float-left"></i></a>
            <h4 class="text-center">Detalhes do pedido</h4>
        </div>
    </div>

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
                        <span>Total</span> <span class="float-right ">R$ 30</span></b>
                    </div>
                </div>
                <!--end row -->
            </div>
            <!---tab bar--->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <?php include_once("./tabbar.php"); ?>

        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>

    <script>
        $(".back-page").click(function() {
            window.history.back()
        })
    </script>
</body>

</html>