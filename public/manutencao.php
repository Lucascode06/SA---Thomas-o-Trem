<?php 
session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true;
include "../db.php";

$manutencoes = [];
$res = $mysqli->query("SELECT * FROM manutencao");
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
            <h1>Manutenções Pendentes</h1>
            <?php if (empty($manutencoes)): ?>
                <p>Nenhuma manutenção pendente.</p>
            <?php else: ?>
                <?php foreach ($manutencoes as $m): ?>
                    <div class="ocorrencia" style="border:1px solid #ccc; border-radius:8px; margin-bottom:1em; padding:1em; background:#fafafa;">
                        <strong><?= htmlspecialchars($m['id_trem']) ?></strong><br>
                        <small>Criado em: <?= isset($m['data_manutencao']) ? htmlspecialchars($m['data_manutencao']) : '' ?></small><br><br>
                        <p><?= nl2br(htmlspecialchars($m['descricao'])) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </main>
    </div>
    <script src="../script/dash.js"></script>
</body>
</html>

