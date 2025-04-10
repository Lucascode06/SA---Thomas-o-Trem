function validarFormulario(){
    const usuario = document.getElementById('usuario').value.trim();
    const senha = document.getElementById('senha').value.trim();

}

function redirecionar() {
    window.location.href = 'esqueceu-a-senha.html';
}


function enviarDados() {
    const textoDigitado = document.getElementById("caixaTexto").value;
    localStorage.setItem("informacaoSalva", textoDigitado); 
    window.location.href = "dados.html"; 
}

function enviarDadosLogin() {
    const textoDigitado = document.getElementById("textoLogin").value;
    localStorage.setItem("informacaoSalva", textoDigitado); 
}

function redirecionarEnviar() {
    window.location.href = 'dashboard.hmtl';
}

function voltarPagina() {
    window.location.href = "login.html";
  }

  function enviarDados() {
    const email = document.getElementById('caixaTexto').value.trim();
    if (email === '') {
      alert('Por favor, digite seu e-mail.');
    } else {
      alert('Se este e-mail estiver cadastrado, enviaremos instruções de recuperação.');
    }
  }

  function redirecionarlogin() {
    window.location.href = 'login.html';
}