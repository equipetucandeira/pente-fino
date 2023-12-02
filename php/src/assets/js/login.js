const inputPassword = document.querySelector("#passwordUserLogin");
const buttonShowHide = document.querySelector("#showPassword");
var passwordIsHide = true;

buttonShowHide.addEventListener("click", ()=>{
    if(passwordIsHide){
        showPassword();
    } else {
        hidePassword();
    }
});

function showPassword(){
    buttonShowHide.src = "../assets/images/icons/hide-password.png";
    buttonShowHide.alt = "Esconder Senha (Hide Password)";
    passwordIsHide = false;
    inputPassword.type = "text";
}

function hidePassword(){
    buttonShowHide.src = "../assets/images/icons/show-password.png";
    buttonShowHide.alt = "Mostrar Senha (Show Password)";
    passwordIsHide = true;
    inputPassword.type = "password";
}