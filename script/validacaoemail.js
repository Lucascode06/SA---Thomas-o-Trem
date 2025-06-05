document.addEventListener("DOMContentLoaded", function () {
  const formulario2 = document.getElementById("infoemail");
  formulario2.addEventListener("submit", function (e) {
    e.preventDefault();

    let valido = true;
    const email2 = document.getElementById("email2").value.trim();
    console.log(email2);

    const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

    if (!emailRegex.test(email2)) {
      document.getElementById("erroEmail").textContent = "E-mail inválido";
      valido = false;
    }
    if (valido) {
      alert("código enviado");
      formulario2.reset();
      window.location.href = "codigoconf.html";
    }

  });

});