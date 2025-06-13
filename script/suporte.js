document.addEventListener("DOMContentLoaded", function () {
  const formulario = document.getElementById("infosuporte");
  formulario.addEventListener("submit", function (e) {
    e.preventDefault();

    let valido = false; // Inicializa como false

    const radios = document.getElementsByName("opcoes");
    for (let i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            valido = true;
            break;
        }
        else{
            document.getElementById("erroselecione").textContent = "Selecione o motivo";
        }
    }

    const problema = document.getElementById("problema").value.trim();
    console.log(problema);

    if (problema.length == 0) {
      document.getElementById("erro").textContent = "Descreva o problema";
      valido = false;
    }
    if (valido) {
      alert("enviado");
      formulario.reset();
    }

  });

});