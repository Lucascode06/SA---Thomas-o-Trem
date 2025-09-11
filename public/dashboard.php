<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../style/dashboard.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=WDXL+Ludabrifont+TC&display=swap"
    rel="stylesheet">
  <script src="../script/dash.js"></script>
</head>

<body>
  <!-- Container principal -->
  <div class="container">
    <header>
      <img src="../style/assets/thomasotrem.png" alt="Logo" class="logo">
      <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    </header>

    <!-- Menu de navegação -->
    <nav id="menu" class="hidden">
      <ul>
        <li><a href="dashboard.html">Inicio</a></li>
        <li><a href="rotas.html">Rotas</a></li>
        <li><a href="notificacao.html">Notificação</a></li>
        <li><a href="relatorio.html">Relatorio</a></li>
        <li><a href="manutencao.html">Manutenção</a></li>
        <li><a href="suporte.html">Suporte</a></li>
        <li><a href="../index.html">Sair</a></li>
      </ul>
    </nav>
  </div>

  <!-- Conteúdo principal -->
  <main>
    <h1>DASHBOARD</h1>

    <!-- Informações do usuário -->
    <div class="user-info">
      <img id="perfil" src="../style/assets/Logo.png" alt="Foto de perfil">
      <div class="user-details">
        <p><strong>Cargo:</strong> xxxxx</p>
        <p><strong>Nome:</strong> xxxxx</p>
        <p><strong>Idade:</strong> xx</p>
        <p><strong>CPF:</strong> xxxxxxxxxxxx</p>
        <p><strong>Email:</strong> xxxxxxxxxxxxxx.xxx</p>
      </div>
    </div>

    <!-- Horários dos trens -->
    <div class="box">
      <h2>Horários</h2>
      <button class="box blue">Trem X - Estação Y - 11:50</button>
      <button class="box red">Trem X - Estação Y - 11:50</button>
      <button class="box blue">Trem X - Estação Y - 11:50</button>
      <button class="box red">Trem X - Estação Y - 11:50</button>
    </div>

    <!-- Relatórios dos trens -->
    <div class="relatorio-box">
      <h2>STATUS</h2>

      <div class="relatorio-card">
        <div class="relatorio-btn">TREM 1</div>
        <div class="relatorio-imagens">
          <img src="../style/assets/vagao.png" class="relatorio-icone" alt="Velocidade">
          <img src="../style/assets/Loading-Icon.png" class="relatorio-icone" alt="Velocidade">
        </div>
      </div>

      <div class="relatorio-card">
        <div class="relatorio-btn">TREM 2</div>
        <div class="relatorio-imagens">
          <img src="../style/assets/vagao.png" class="relatorio-icone" alt="Velocidade">
          <img src="../style/assets/pare.png" class="relatorio-icone" alt="Parado">
        </div>
      </div>

      <div class="relatorio-card">
        <div class="relatorio-btn">TREM 3</div>
        <div class="relatorio-imagens">
          <img src="../style/assets/vagao.png" class="relatorio-icone" alt="Velocidade">
          <img src="../style/assets/configuracoes.png" class="relatorio-icone" alt="Configurações">
        </div>
      </div>
    </div>
  </main>
</body>

</html>