<?php 
session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true; 

include "../db.php";

$notificacoes = [];
$res = $mysqli->query("SELECT * FROM notificacoes");
while ($row = $res->fetch_assoc()) {
    $notificacoes[] = $row;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Notificação</title>
    <script src="../script/dash.js"></script>
</head>

<body id="notificacao-page">
    <div class="container">
        <header>
            <img src="../style/assets/thomasotrem.png" alt="Logo" class="logo">
            <div>
                <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        </header>
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

    <main>
        <h1>NOTIFICAÇÃO</h1>
            <?php if (empty($notificacoes)): ?>
                <p>Nenhuma notificação.</p>
            <?php else: ?>
                <?php foreach ($notificacoes as $n): ?>
                    <div class="ocorrencia" style="border:1px solid #ccc; border-radius:8px; margin-bottom:1em; padding:1em; background:#fafafa;">
                        <strong><?= htmlspecialchars($n['titulo']) ?></strong><br>
                        <small>Criado em: <?= isset($n['data_alerta']) ? htmlspecialchars($n['data_alerta']) : '' ?></small><br><br>
                        <p><?= nl2br(htmlspecialchars($n['descricao'])) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
    </main>
</body>

</html>