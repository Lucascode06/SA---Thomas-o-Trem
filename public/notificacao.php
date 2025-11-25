<?php 
session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true; ?>

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
        <div>
            <div class="box">
            <div class="tabela">
            <?php
            include '../db.php';
               $sql = "SELECT * FROM notificacoes";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                echo "<table class='notificacoes-table' border='0'>
                    <tr>
                        <th>Título</th>
                        <th>Data</th>
                        <th>Descrição</th>
                    </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['titulo']}</td>
                            <td>{$row['data_alerta']}</td>
                            <td>{$row['descricao']}</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "<div class='msg'>Nenhum registro encontrado.</div>";
            }
            $mysqli->close();
            ?>
            </div>
            </div>
            <div class="box">
                <img class="notificacao-img" src="../style/assets/Desvio.png" alt="">
                <div class="notificacao-info">
                    <p><strong>Desvio de rota:</strong></p>
                    <p>Causa: Manutenção nos trilhos</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>