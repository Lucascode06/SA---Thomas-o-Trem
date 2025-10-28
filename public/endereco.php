<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta de Endereço - ViaCEP</title>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>

  <div id="viacep-container">
    <h2 id="viacep-titulo">Consulta de Endereço</h2>

    <form id="viacep-form">
      <label for="viacep-cep">CEP:</label>
      <input type="text" id="viacep-cep" maxlength="8" placeholder="Digite apenas números" required>

      <label for="viacep-rua">Rua:</label>
      <input type="text" id="viacep-rua" readonly>

      <label for="viacep-bairro">Bairro:</label>
      <input type="text" id="viacep-bairro" readonly>

      <label for="viacep-cidade">Cidade:</label>
      <input type="text" id="viacep-cidade" readonly>

  <label for="viacep-uf">Estado:</label>
  <input type="text" id="viacep-uf" readonly>
    </form>
  </div>

  <script src="../script/script.js"></script>
</body>
</html>
