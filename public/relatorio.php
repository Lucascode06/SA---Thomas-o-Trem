<html lang="en">
<!-- Relatõrio dos trens -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/style.css">
  <title>Relatório</title>
</head>
<body id="relatorio-page">
<div class="container">
  <header>
    <script src="../script/dash.js"></script>
    <img src="../style/assets/thomasotrem.png" alt="Logo" class="logo">
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
  </header>
  <nav id="menu" class="hidden">
    <ul>
      <li><a href="dashboard.php">Inicio</a></li>
      <li><a href="rotas.php">Rotas</a></li>
      <li><a href="notificacao.php">Notificação</a></li>
      <li><a href="relatorio.php">Relatório</a></li>
  <li><a href="manutencao.php">Manutenção</a></li>
  <li><a href="suporte.php">Suporte</a></li>
  <li><a href="viacep.php">Endereço</a></li>
  <li><a href="../index.php">Sair</a></li>
    </ul>
  </nav>
  </div>

<div class="relatorio-box">
  <p>RELATÓRIO</p>
  <img src="../style/assets/relatorio.png" class="relatorio-icon" alt="Ícone Relatório">

  <div class="relatorio-card">
    <div class="relatorio-btn">VELOCIDADE MÉDIA</div>
    <img src="../style/assets/velocimetro.png.png" class="relatorio-icone" alt="Velocidade">
  </div>

  <div class="relatorio-card">
    <div class="relatorio-btn">EFICIÊNCIA ENERGÉTICA</div>
    <img src="../style/assets/energia.png" class="relatorio-icone" alt="Energia">
  </div>

  <div class="relatorio-card">
    <div class="relatorio-btn">SEGURANÇA</div>
    <img src="../style/assets/seguranca.png" class="relatorio-icone" alt="Segurança">
  </div>
</div>
</div>
</body>
</html>