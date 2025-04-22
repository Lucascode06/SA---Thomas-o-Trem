/*function validarFormulario() {
  const usuario = document.getElementById('usuario').value.trim();
  const senha = document.getElementById('senha').value.trim();
}*/

/*function enviarDados() {
  const textoDigitado = document.getElementById("caixaTexto").value;
  localStorage.setItem("informacaoSalva", textoDigitado);
  window.location.href = "dados.html";
}*/

/*function enviarDadosLogin() {
  const textoDigitado = document.getElementById("textoLogin").value;
  localStorage.setItem("informacaoSalva", textoDigitado);
}*/

function voltarPagina() {
  window.location.href = "index.html";
}

function voltarPagina2() {
  window.location.href = "esqueceu-a-senha.html";
}

function compararsenhanova() {
  if (document.getElementById("senhanova").value == document.getElementById("confsenhanova").value) {
    window.location.href = "index.html";
  }
  else {
    alert('As senhas não batem');
  }
}

