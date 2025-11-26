<?php 
session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true; ?>

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
    <main>
      <h1>RELATÓRIOS</h1>
      <nav id="menu" class="hidden">
        <ul>
          <li><a href="../public/dashboard.php">Inicio</a></li>
                <li><a href="rotas.php">Rotas</a></li>
                <li><a href="notificacao.php">Notificação</a></li>
                <?php if ($isAdmin): ?>
                    <li><a href="criar_notificacao.php">Criar Notificação</a></li>
                <?php endif; ?>
                <li><a href="relatorio.php">Relatório</a></li>
                <li><a href="manutencao.php">Manutenção</a></li>
                <?php if ($isAdmin): ?>
                    <li><a href="criar_manutencao.php">Criar Manutenção</a></li>
                <?php endif; ?>
                <li><a href="suporte.php">Suporte</a></li>
                <?php if ($isAdmin): ?>
                    <li><a href="cadastro.php">Cadastrar Funcionário</a></li>
                    <li><a href="read.php">Gerenciar Usuários</a></li>
                <?php endif; ?>
                <li><a href="../?logout=1">Sair</a></li>
        </ul>
      </nav>
  </div>

  <div class="box">
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
  </main>
</body>

</html>