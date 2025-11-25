<?php
session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true;
if (!$isAdmin) {
    header("Location: manutencao.php");
    exit;
}

include "../db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $status = 'Pendente';

    $sql = "INSERT INTO ocorrencias (titulo, descricao, status) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sss", $titulo, $descricao, $status);

    if ($stmt->execute()) {
        echo "<script>alert('Ocorrência criada!'); window.location='manutencao.php';</script>";
    } else {
        echo "Erro ao criar ocorrência!";
    }
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
    <title>Suporte</title>
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
            <li><a href="../index.php">Sair</a></li>
        </ul>
    </nav>
<div class="container">
    <h2>Criar Nova Ocorrência</h2>

    <form method="POST">
        <label>Título:</label><br>
        <input type="text" name="titulo" required><br><br>

        <label>Descrição:</label><br>
        <textarea name="descricao" required></textarea><br><br>

        <button type="submit">Criar</button>
    </form>

    <br>
    <a href="manutencao.php">Voltar</a>
</div>
</body>
</html>
