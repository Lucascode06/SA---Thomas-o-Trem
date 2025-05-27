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

/* Vai para a página inicial */
function voltarPagina() {
  window.location.href = "index.html";
}

/* Redireciona para a página de recuperação de senha */
function voltarPagina2() {
  window.location.href = "EsqueceuASenha.html";
}
/* Confirma se as duas senhas novas são iguais */
function validasenhanova() {
  if (document.getElementById("senhanova").value == document.getElementById("confsenhanova").value) {
    window.location.href = "index.html";
  }
  else {
    alert('As senhas não batem');
  }
}

/* Após login válido, redireciona para o painel */
function validalogin(){
window.location.href = "../public/dashboard.html";
}

/* Após email válido, segue para código de confirmação */
function validaemail(){
window.location.href = "../public/codigoconf.html";
}

/* Se código estiver certo, permite redefinir a senha */
function validaconf(){
window.location.href = "../public/redefinirsenha.html";
}

