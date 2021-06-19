if (!localStorage.hasOwnProperty("user")) {
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
} else {

    var profileHead = document.getElementById("profile-top");
    var profileInfo = document.getElementById("profile-info");
    const user = JSON.parse(localStorage.getItem("user"));

    profileHead.innerHTML = `
        <div class=" text-center bg-light "><br>
            <img class="perfil" src="${user.image ? user.image : "./img/user.png"}"><br><br>
            <b> ${user.name} </b><br>
            <a href="./atualizar.php" class="btn btn-warning">Editar Perfil</a><br> <br>
        </div>
    `;

    profileInfo.innerHTML = `
        <br><p><b>Detalhes</b></p>
        <i class=" icon far fa-user"></i><span class="m">${user.name}</span><br><br>
        <i class=" icon far fa-envelope"></i><span class="m">${user.email}</span> <br><br>
        <i class="icon fas fa-egg"></i> <span class="m"><a href="./entrar.php">Adicione seu restaurante</a> </span><br><br>
        <i class="icon fas fa-sign-out-alt"></i> <span onclick="logout()" class="m"><a href="">Sair</a></span>
    `;
}

function logout() {
    localStorage.removeItem("user")
    location.reload()
}