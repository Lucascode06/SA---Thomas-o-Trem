// Quando a página carregar, busca o dado salvo e mostra no console
window.onload = function() {
    const informacaoSalva = localStorage.getItem("informacaoSalva");
    console.log("Dado guardado:", informacaoSalva);

};