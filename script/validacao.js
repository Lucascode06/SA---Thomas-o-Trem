
/* Confirma se as duas senhas novas são iguais */
function validasenhanova() {
  if (document.getElementById("senhanova").value == document.getElementById("confsenhanova").value) {
    window.location.href = "index.html";
  }
  else {
    alert('As senhas não batem');
  }
}

/*Validação*/
document.addEventListener("DOMContentLoaded", function(){
  
  const formulario = document.getElementById("infologin");
  formulario.addEventListener("submit", function(e){
    e.preventDefault();

    let valido = true;
    const email = document.getElementById("email").value.trim();
    const senha = document.getElementById("senha").value.trim();

    console.log(email);
    console.log(senha);

    if(senha.length < 3){
      document.getElementById("erroSenha").textContent = "Senha inválida";
      valido = false;
    }

    const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

    if(!emailRegex.test(email)){
      document.getElementById("erroEmail").textContent = "E-mail inválido";
      valido = false;
    }
    if(valido){
      alert("formulário enviado com sucesso");
      formulario.reset();
      window.location.href = "public/dashboard.html";
    }

  });

});
