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
  $foto_perfil = $_POST["foto_perfil"] ?? "";
  
  $senha_plain = $_POST["senha"] ?? "";
  $senha = password_hash($senha_plain, PASSWORD_DEFAULT);

  // Campos de endereço enviados pelo formulário (não estão sendo salvos na tabela `usuarios` por padrão)
  // Se quiser salvar, adicione colunas na tabela e atualize a query abaixo.
  $cep = $_POST['cep'] ?? '';
  $rua = $_POST['rua'] ?? '';
  $bairro = $_POST['bairro'] ?? '';
  $cidade = $_POST['cidade'] ?? '';
  // O formulário usa name="uf" para o estado; mapeia para a variável usada na query
  $estado = $_POST['uf'] ?? $_POST['estado'] ?? '';

  // Inserir também os campos de endereço (assumindo que a tabela `usuarios` foi atualizada)
  $stmt = $mysqli->prepare("INSERT INTO usuarios (nome, email, senha, cep, rua, bairro, cidade, estado, foto_perfil) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
  if ($stmt) {
    $stmt->bind_param("sssssssss", $nome, $email, $senha, $cep, $rua, $bairro, $cidade, $estado, $foto_perfil);
    $stmt->execute();
    $stmt->close();
    $msg = "Funcionário cadastrado com sucesso!";
  } else {
    // Em caso de erro (colunas não existem ou outro problema), mostra mensagem e registra o erro
    $msg = "Erro ao cadastrar funcionário: " . $mysqli->error;
  }
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
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

  <section class="cadastro-section" style="display: flex; justify-content: center; align-items: center; min-height: 60vh;">
    <div class="login-container" style="display: flex; justify-content: center; align-items: center;">
      <div class="card" style="margin: 0 auto;">
        <h1>Cadastro</h1>
        <?php if ($msg): ?><p class="msg"><?php echo $msg; ?></p><?php endif; ?>
  <form id="viacep-form" method="post">
          <input type="text" name="nome" placeholder="Nome" required>
          <input type="email" name="email" placeholder="E-mail" required>
          <input type="password" name="senha" placeholder="Senha" required>

          <!-- ViaCEP -->
          <label for="viacep-cep" style="font-weight:600; margin-top:8px;">CEP:</label>
          <input type="text" id="viacep-cep" name="cep" maxlength="8" placeholder="Digite apenas números">

          <label for="viacep-rua" style="font-weight:600; margin-top:8px;">Rua:</label>
          <input type="text" id="viacep-rua" name="rua" readonly>

          <label for="viacep-bairro" style="font-weight:600; margin-top:8px;">Bairro:</label>
          <input type="text" id="viacep-bairro" name="bairro" readonly>

          <label for="viacep-cidade" style="font-weight:600; margin-top:8px;">Cidade:</label>
          <input type="text" id="viacep-cidade" name="cidade" readonly>

          <label for="viacep-uf" style="font-weight:600; margin-top:8px;">Estado:</label>
          <input type="text" id="viacep-uf" name="uf" readonly>

          <label for="foto_perfil" style="font-weight:600; margin-top:8px;">Foto de Perfil:</label>
          <input type="file" name="foto_perfil" accept="image/png, image/jpeg, image/jpg" required><br>

          <button type="submit">Cadastrar Funcionário</button>
        </form>
      </div>
    </div>
  </section>

  <script src="../script/script.js"></script>
</body>

</html>