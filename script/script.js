document.getElementById('viacep-cep').addEventListener('blur', viacepBuscarCEP);

function limparCampos() {
  document.getElementById('viacep-rua').value = '';
  document.getElementById('viacep-bairro').value = '';
  document.getElementById('viacep-cidade').value = '';
  document.getElementById('viacep-uf').value = '';
}

function viacepBuscarCEP() {
  const cep = document.getElementById('viacep-cep').value.replace(/\D/g, '');
  const form = document.getElementById('viacep-form');

  if (cep.length !== 8) {
    alert('CEP inválido! Por favor, digite 8 números.');
    limparCampos();
    return;
  }

  // Adiciona classe de loading
  form.classList.add('loading');
  limparCampos();

  fetch(`https://viacep.com.br/ws/${cep}/json/`)
    .then(response => {
      if (!response.ok) {
        throw new Error('Erro de conexão com o servidor. Por favor, tente novamente.');
      }
      return response.json();
    })
    .then(data => {
      if (data.erro) {
        throw new Error('CEP não encontrado. Verifique o número digitado.');
      }

      document.getElementById('viacep-rua').value = data.rua || '';
      document.getElementById('viacep-bairro').value = data.bairro || '';
      document.getElementById('viacep-cidade').value = data.localidade || '';
      document.getElementById('viacep-uf').value = data.uf || '';
    })
    .catch((error) => {
      alert(error.message || 'Erro ao buscar o CEP. Por favor, tente novamente.');
      limparCampos();
    })
    .finally(() => {
      form.classList.remove('loading');
    });
}
