function validarFormulario(){
    const usuario = document.getElementById('usuario').value.trim();
    const senha = document.getElementById('senha').value.trim();

}

function redirecionar() {
    window.location.href = 'esqueceu-a-senha.html';
}


function enviarDados() {
    // 1. Pegar o valor da caixa de texto
    const textoDigitado = document.getElementById("caixaTexto").value;

    // 2. Guardar a informação (pode ser no localStorage, sessionStorage ou enviar para um servidor)
    localStorage.setItem("informacaoSalva", textoDigitado); // Salva no navegador

    // 3. Redirecionar para outra página
    window.location.href = "dados.html"; // Muda para outra página
}