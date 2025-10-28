<?php
session_start();
// o arquivo logout.php está na pasta script/
include __DIR__ . '/../script/logout.php';
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta CEP - ViaCEP</title>
  <link rel="stylesheet" href="../style/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body class="dashboard-page">
  <div class="container">
    <header>
      <img src="../style/assets/thomasotrem.png" alt="Logo" class="logo">
      <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    </header>

    <nav id="menu" class="hidden">
      <ul>
        <li><a href="dashboard.php">Início</a></li>
        <li><a href="rotas.php">Rotas</a></li>
        <li><a href="notificacao.php">Notificação</a></li>
        <li><a href="relatorio.php">Relatório</a></li>
        <li><a href="manutencao.php">Manutenção</a></li>
        <li><a href="suporte.php">Suporte</a></li>
        <?php if ($isAdmin): ?>
          <li><a href="cadastro.php">Cadastrar Funcionário</a></li>
          <li><a href="read.php">Gerenciar Usuários</a></li>
        <?php endif; ?>
        <li><a href="viacep.php">Endereço</a></li>
        <li><a href="../?logout=1">Sair</a></li>
      </ul>
    </nav>
  </div>

  <main>
    <section style="display:flex; justify-content:center; align-items:center; min-height:60vh;">
      <div id="viacep-container">
        <h2 id="viacep-titulo">Consulta de Endereço</h2>

        <form id="viacep-form">
          <label for="viacep-cep">CEP:</label>
          <input type="text" id="viacep-cep" maxlength="8" placeholder="Digite apenas números" required>

          <label for="viacep-rua">Rua:</label>
          <input type="text" id="viacep-rua" name="rua" readonly>

          <label for="viacep-bairro">Bairro:</label>
          <input type="text" id="viacep-bairro" name="bairro" readonly>

          <label for="viacep-cidade">Cidade:</label>
          <input type="text" id="viacep-cidade" name="cidade" readonly>

          <label for="viacep-uf">Estado:</label>
          <input type="text" id="viacep-uf" name="uf" readonly>

          <p style="margin-top:12px; color:#2c5574; font-size:14px;">Digite o CEP e clique fora do campo para buscar automaticamente.</p>
        </form>
      </div>
    </section>
  </main>

  <script src="../script/dash.js"></script>
  <script src="../script/script.js"></script>
</body>

</html>