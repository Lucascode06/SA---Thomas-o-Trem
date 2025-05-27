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
  window.location.href = "EsqueceuASenha.html";
}

function validasenhanova() {
  if (document.getElementById("senhanova").value == document.getElementById("confsenhanova").value) {
    window.location.href = "index.html";
  }
  else {
    alert('As senhas não batem');
  }
}

function validalogin(){
window.location.href = "../public/dashboard.html";
}

function validaemail(){
window.location.href = "../public/codigoconf.html";
}

function validaconf(){
window.location.href = "../public/redefinirsenha.html";
}

