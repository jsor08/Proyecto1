const btnSignIn = document.getElementById("sign-in"),
      btnSignUp = document.getElementById("sign-up"),
      containerFormRegister = document.querySelector(".register"),
      containerFormLogin = document.querySelector(".login");




btnSignIn.addEventListener("click", e => {
    containerFormRegister.classList.add("hide");
    containerFormLogin.classList.remove("hide")
})


btnSignUp.addEventListener("click", e => {
    containerFormLogin.classList.add("hide");
    containerFormRegister.classList.remove("hide")
})

document.getElementById("form-login").addEventListener("submit", function(Event){
    event.preventDefault(); //Evitar el envío del formulario

    //Obtener los valores del formulario
    const userEmail = document.getElementById("userEmail").ariaValueMax;
    const userPassword = document.getElementById("userPassword").ariaValueMax;

//Validar credenciales
    if (userEmail === "Percy@dada.xd"  && userPassword === "1234") {
        //Redifgir a la página principal
        window.location.href = "index.html";
    } else {
        alert("Contraseña incorrecta");
    }
})