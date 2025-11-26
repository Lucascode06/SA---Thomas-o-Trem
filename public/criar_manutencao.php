<?php
session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true;
if (!$isAdmin) {
    header("Location: manutencao.php");
    exit;
}

include "../db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $_POST["data"];
    $descricao = $_POST["descricao"];

    $sql = "INSERT INTO manutencao (data_manutencao, descricao) VALUES (?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $data, $descricao);
    $stmt->execute();
    $stmt->close();
}
?>

<?php 
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true; ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/suporte.js"></script>
    <title>Criar Manutenção</title>
</head>

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
<div class="container">
    <h2>Criar Nova Ocorrência</h2>

    <div class="box">
            <form id="form-notificacao" method="POST">
                <h3>Data</h3>
                <input type="date" id="data" name="data" required>

                <h3>Descrição</h3>
                <textarea placeholder="Digite sua mensagem" id="descricao" name="descricao" required></textarea>
                <div class="erro" id="erro"></div>

                <button type="submit">Criar</button>
            </form>

        </div>
</div>
</body>
</html>
