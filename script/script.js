// Busca o input de CEP — se não existir, não faz nada
const cepInput = document.getElementById('viacep-cep');
if (cepInput) {
  cepInput.addEventListener('blur', viacepBuscarCEP);
}

function limparCampos() {
  const ids = ['viacep-rua', 'viacep-bairro', 'viacep-cidade', 'viacep-uf'];
  ids.forEach(id => {
    const el = document.getElementById(id);
    if (el) el.value = '';
  });
}

function viacepBuscarCEP() {
  const cep = (document.getElementById('viacep-cep')?.value || '').replace(/\D/g, '');
  // Tenta achar um form com id viacep-form, senão usa o form pai do input
  let form = document.getElementById('viacep-form');
  if (!form && cepInput) form = cepInput.closest('form');

  if (cep.length !== 8) {
    alert('CEP inválido! Por favor, digite 8 números.');
    limparCampos();
    return;
  }

  if (form) form.classList.add('loading');
  limparCampos();

  fetch(`https://viacep.com.br/ws/${cep}/json/`)
    .then(response => {
      if (!response.ok) {
        throw new Error('Erro de conexão com o servidor. Por favor, tente novamente.');
      }
      return response.json();
    })
    .then(data => {
      // debug: mostra o objeto retornado no console para ajudar a diagnosticar CEPs que não têm logradouro
      console.debug('ViaCEP response:', data);
      if (data.erro) {
        throw new Error('CEP não encontrado. Verifique o número digitado.');
      }

      // usar logradouro (nome correto do campo retornado pela API)
  const logradouro = data.logradouro || '';
      const bairro = data.bairro || '';
      const cidade = data.localidade || '';
      const uf = data.uf || '';

      const elRua = document.getElementById('viacep-rua');
      const elBairro = document.getElementById('viacep-bairro');
      const elCidade = document.getElementById('viacep-cidade');
      const elUf = document.getElementById('viacep-uf');

  // se logradouro estiver vazio, tentar usar um fallback razoável (ex.: bairro) para não deixar em branco
  if (elRua) elRua.value = logradouro || bairro || '';
      if (elBairro) elBairro.value = bairro;
      if (elCidade) elCidade.value = cidade;
      if (elUf) elUf.value = uf;
    })
    .catch((error) => {
      alert(error.message || 'Erro ao buscar o CEP. Por favor, tente novamente.');
      limparCampos();
    })
    .finally(() => {
      if (form) form.classList.remove('loading');
    });
}
