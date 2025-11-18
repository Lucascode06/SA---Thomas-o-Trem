// Compatibilidade: função toggleMenu usada nas páginas do diretório `public/`
function toggleMenu() {
    const menu = document.getElementById('menu');
    if (!menu) return;
    menu.classList.toggle('hidden');
}

// Export para futuros módulos (não obrigatório, apenas compatibilidade)
if (typeof module !== 'undefined') {
    module.exports = { toggleMenu };
}
