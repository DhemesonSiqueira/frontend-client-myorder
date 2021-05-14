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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<style>
    .btn-ama {
        background-color: #ffc700;
        color: #000;
    }

    .container {
        margin-top: 10%;
    }

    img {
        width: 20%;
    }

    @media only screen and (max-width: 800px) {
        .container {
            margin-top: 50%;

        }

        img {
            width: 30%;
        }
    }
</style>

<body>

    <div>
        <form class="container" action="cards.php">
            <a class="text-center" href="./home.php">
                <img src="auge.png" alt="logo">
            </a>
            <p>Enviaremos um email para a recuperação de senha</p>
            <input type="email" required class="form-control mb-2" placeholder="Email">
            <button class="btn btn-ama mt-2 col-md-12">Recuperar senha</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

</body>

</html>