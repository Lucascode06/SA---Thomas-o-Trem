<?php 
session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true;
include "../db.php";

// Buscar manutenções pendentes
$manutencoes = [];
$res = $mysqli->query("SELECT * FROM ocorrencias WHERE status = 'Pendente' ORDER BY id DESC");
while ($row = $res->fetch_assoc()) {
    $manutencoes[] = $row;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manutenção</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="../script/dash.js"></script>
</head>

    <body id="manutencao-page">
        <div class="container">
            <header>
                 <script src="../script/dash.js"></script>
                <img src="../style/assets/thomasotrem.png" alt="Logo" class="logo">
                <div>
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
        </div>

        <main>
            <h1>Manutenções Pendentes</h1>
            <a href="criar_manutencao.php" style="display:inline-block;margin-bottom:1em;">Criar Nova Manutenção</a>
            <?php if (empty($manutencoes)): ?>
                <p>Nenhuma manutenção pendente.</p>
            <?php else: ?>
                <?php foreach ($manutencoes as $m): ?>
                    <div class="ocorrencia" style="border:1px solid #ccc; border-radius:8px; margin-bottom:1em; padding:1em; background:#fafafa;">
                        <strong><?= htmlspecialchars($m['titulo']) ?></strong><br>
                        <small>Criado em: <?= isset($m['data_criacao']) ? htmlspecialchars($m['data_criacao']) : '' ?></small><br><br>
                        <p><?= nl2br(htmlspecialchars($m['descricao'])) ?></p>
                        <p>Status: <strong><?= htmlspecialchars($m['status']) ?></strong></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </main>
    </div>
    <script src="../script/dash.js"></script>
</body>
</html>

