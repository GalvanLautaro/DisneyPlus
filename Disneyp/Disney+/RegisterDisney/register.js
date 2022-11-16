const inputEmail = document.querySelector(".InputMail");
const btn = document.getElementById("btn-send");
let patron = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
btn.addEventListener("click", event => {
    if(patron.test(inputEmail.value)) {
        console.log("Email valido");
        location = "Register2.html";
    } else {
        event.preventDefault();
        alert('Email invalido, volver a intentar.');
    }
});