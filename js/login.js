async function authenticateUser(email, senha) {
    const user = await axios.post(`http://localhost:3000/sessions`, {
        email,
        password: senha,
    });
    
    return user.data;
}

var formLogin = document.forms.loginForm;

formLogin.addEventListener("submit", (e) => {
    e.preventDefault();

    var email = document.forms.loginForm.email.value;
    var senha = document.forms.loginForm.senha.value;

    result = authenticateUser(email, senha).then(result => setLogin(result))
})

function setLogin(user) {
    const userData = {
        token: user.token,
        name: user.user.name,
        email: user.user.email,
        image: user.user.image,
    }
    localStorage.setItem("user", JSON.stringify(userData))
    window.location.href = "http://localhost/frontend-client-myorder/index.php"
}
// users = ["dhemeson", "email", "senha", {others: "Bah"}]

// localStorage.removeItem("userToken")