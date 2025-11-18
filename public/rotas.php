<?php 
session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body id="rotas-page">
    <div class="container">
        <header>
            <img src="../style/assets/thomasotrem.png" alt="Logo" class="logo">
            <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        </header>
        <nav id="menu" class="hidden">
            <ul>
                <li><a href="dashboard.php">Inicio</a></li>
                <li><a href="rotas.php">Rotas</a></li>
                <li><a href="notificacao.php">Notificação</a></li>
                <li><a href="relatorio.php">Relatorio</a></li>
                <li><a href="manutencao.php">Manutenção</a></li>
                <li><a href="suporte.php">Suporte</a></li>
                <?php if ($isAdmin): ?>
          <li><a href="cadastro.php">Cadastrar Funcionário</a></li>
          <li><a href="read.php">Gerenciar Usuários</a></li>
        <?php endif; ?>
                <li><a href="../index.php">Sair</a></li>
            </ul>
        </nav>
        <main>
            <h1>ROTAS</h1>
            <div class="box">
                <img src="../style/assets/Rota.png" alt="Rotas dos Trens" class="rotas-img">
                <div class="rotas-botoes">
                    <button class="rota-btn">Rota 1</button>
                    <button class="rota-btn">Rota 2</button>
                    <button class="rota-btn">Rota 3</button>
                </div>
            </div>
        </main>
    </div>
    <script src="../script/dash.js"></script>
</body>

</html>