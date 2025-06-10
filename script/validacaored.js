/*Validação*/
document.addEventListener("DOMContentLoaded", function(){
  
  const formulario = document.getElementById("infonovasenha");
  formulario.addEventListener("submit", function(e){
    e.preventDefault();

    let valido = true;
    const novasenha = document.getElementById("novasenha").value.trim();
    const novasenha2 = document.getElementById("novasenha2").value.trim();

    console.log(novasenha);
    console.log(novasenha2);

    if(novasenha.length < 5){
      document.getElementById("erroEmail").textContent = "Senha fraca";
      valido = false;
    }
    
    if(novasenha !== novasenha2){
        document.getElementById("erroEmail").textContent = "Senhas não batem";
        valido = false;
    }
    

    if(valido){
      alert("senha redefinida com sucesso");
      formulario.reset();
      window.location.href = "../index.html";
    }

  });

});
