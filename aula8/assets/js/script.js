//Pegando o ícone
var showPass = document.getElementById("show-pass")
//Pegando o campo de senha
var pass = document.getElementById("pass")

showPass.addEventListener("click", ()=>{
    if(showPass.innerHTML == "🐵") {
        showPass.innerHTML = "🙈"
        showPass.title = "Esconda essa senha!"
        pass.type = "text"
    } else {
        showPass.innerHTML = "🐵"
        showPass.title = "Quer ver a senha?"
        pass.type = "password"
    }
})