<?php 
session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true; ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/suporte.js"></script>
    <title>Criar Notificação</title>
</head> <!-- Pagina do suporte ao usuario -->

<body id="suporte-page">
    <div class="container">
        <header>
            <script src="../script/dash.js"></script> <img src="../style/assets/thomasotrem.png" alt="Logo"
                class="logo">
            <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        </header>

    </div>
    <nav id="menu" class="hidden">
        <ul>
            <li><a href="./dashboard.php">Inicio</a></li>
            <li><a href="rotas.php">Rotas</a></li>
            <li><a href="notificacao.php">Notificação</a></li>
            <li><a href="relatorio.php">Relatorio</a></li>
            <li><a href="manutencao.php">Manutenção</a></li>
            <li><a href="suporte.php">Suporte</a></li>
            <?php if ($isAdmin): ?>
          <li><a href="cadastro.php">Cadastrar Funcionário</a></li>
          <li><a href="read.php">Gerenciar Usuários</a></li>
        <?php endif; ?>
            <li><a href="../?logout=1">Sair</a></li>
        </ul>
    </nav>

    <main>
        <h1>Criar Notificação</h1>

        <div class="box">
            <form id="form-notificacao" method="POST">
                <h3>Título</h3>
                <input type="text" id="titulo-notificacao" placeholder="Digite o título" required >
                <h3>Descrição</h3>
                <textarea placeholder="Digite sua mensagem" id="problema"></textarea>
                <div class="erro" id="erro"></div>
                <button type="submit">Criar</button>
            </form>

        </div>
    </main>
</body>

</html>