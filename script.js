
//Primeira forma de desabilitar o botão de submit. Evita spam de requisições
// function disableButton(){
//     const submitbtn = document.getElementById("btnSubmit");
//     submitbtn.disabled = true;
//     submitbtn.innerText = "Cargando Informação...";
//     return true;
// };

//Segunda forma de desabilitar o botão de submit. Evita spam de requisições.
document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('formPost');
    const submitbtn = document.getElementById("btnSubmit");

    form.addEventListener("submit", function(e){
        submitbtn.disabled = true;
        submitbtn.innerText = "Carregando informação...";
    });
});