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