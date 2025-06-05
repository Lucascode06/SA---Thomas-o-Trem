document.addEventListener("DOMContentLoaded", function () {
  const formulario = document.getElementById("infoconf");
  formulario.addEventListener("submit", function (e) {
    e.preventDefault();

    let valido = true;
    const conf = document.getElementById("conf").value.trim();
    console.log(conf);

    if (conf !== 6) {
      document.getElementById("erroEmail").textContent = "Código errado";
      valido = false;
    }
    if (valido) {
      alert("código enviado");
      formulario.reset();
      window.location.href = "redefinirsenha.html";
    }

  });

});