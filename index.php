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
                    <input type="search" onblur="removerResult()" placeholder="Pesquise um restaurante" aria-describedby="button-addon1" class="form-control border-0 bg-light campo">
                    <div class="input-group-append">
                        <button id="button-addon1" type="submit" class="btn btn-link text-warning"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <ul class="list-group sugestoes">

        </ul>
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
        <div class="row" id="containerRestaurantes">

        </div>
    </div>

    <?php include_once("sacola.php"); ?>

    <!---tab bar--->
    <?php include_once("./tabbar.php"); ?>

    <script>
        function autoComplete(cidade) {
            const destino = ['Salvador', 'Vitória', 'Maceió', 'Ceará', 'Rio Branco', 'Macapá', 'Porto Velho', 'Olinda', 'Aracaju', 'Capitólio', 'São Paulo', 'Paraty'];
            return destino.filter((valor) => {
                const valorMinusculo = valor.toLowerCase()
                const cidadeMinusculo = cidade.toLowerCase()

                return valorMinusculo.includes(cidadeMinusculo)
            })
        }
        const campo = document.querySelector('.campo')
        var sugestoes = document.querySelector('.sugestoes')

        campo.addEventListener('input', ({
            target
        }) => {
            const dadosDoCampo = target.value
            if (dadosDoCampo.length) {
                const autoCompleteValores = autoComplete(dadosDoCampo)
                autoCompleteValores.splice(3)
                sugestoes.innerHTML = `
                    ${autoCompleteValores.map((value) => {
                        return (
                        `<li class="list-group-item">${value}</li>`
                        )
                    }).join('')}
                `
            }
        });

        function removerResult() {
            sugestoes.innerHTML = "";
        }
    </script>
    <script src="./js/api.js"></script>

</body>

</html>