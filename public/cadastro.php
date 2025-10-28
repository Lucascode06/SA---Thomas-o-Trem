<?php
// 1) Conexão
include '../db.php';

session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true;

// 3) CADASTRO
$msg = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $senha = $_POST["senha"] ?? "";

    $stmt = $mysqli->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);
    $stmt->execute();
    $stmt->close();

    $msg = "Funcionário cadastrado com sucesso!";
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../style/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=WDXL+Ludabrifont+TC&display=swap"
    rel="stylesheet">
  <script src="../script/dash.js"></script>
</head>

<body class="dashboard-page">
  <!-- Container principal -->
  <div class="container">
    <header>
      <img src="../style/assets/thomasotrem.png" alt="Logo" class="logo">
      <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    </header>
    <!-- Menu de navegação -->
    <nav id="menu" class="hidden">
      <ul>
        <li><a href="dashboard.php">Início</a></li>
        <li><a href="rotas.html">Rotas</a></li>
        <li><a href="notificacao.html">Notificação</a></li>
        <li><a href="relatorio.html">Relatório</a></li>
        <li><a href="manutencao.html">Manutenção</a></li>
        <li><a href="suporte.html">Suporte</a></li>
        <?php if ($isAdmin): ?>
          <li><a href="cadastro.php">Cadastrar Funcionário</a></li>
          <li><a href="read.php">Gerenciar Usuários</a></li>
        <?php endif; ?>
        <li><a href="viacep.php">Endereço</a></li>
        <li><a href="../?logout=1">Sair</a></li>
      </ul>
    </nav>
  </div>

  <section class="cadastro-section" style="display: flex; justify-content: center; align-items: center; min-height: 60vh;">
    <div class="login-container" style="display: flex; justify-content: center; align-items: center;">
      <div class="card" style="margin: 0 auto;">
        <h3>Cadastro</h3>
        <?php if ($msg): ?><p class="msg"><?php echo $msg; ?></p><?php endif; ?>
        <form method="post">
          <input type="text" name="nome" placeholder="Nome" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="password" name="senha" placeholder="Senha" required>
          <button type="submit">Cadastrar Funcionário</button>
        </form>
      </div>
    </div>
  </section>

</body>

</html>