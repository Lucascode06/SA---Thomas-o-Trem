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
                <li><a href="relatorio.php">Relatorio</a></li>
                <li><a href="manutencao.php">Manutenção</a></li>
                <li><a href="suporte.php">Suporte</a></li>
                <li><a href="../index.php">Sair</a></li>
            </ul>
        </nav>
    </div>

    <main>
        <div class="user-info">
            <img id="perfil" src="../style/assets/Logo.png" alt="">
            <div class="user-details">
                <p><strong>Cargo:</strong> xxxxx</p>
                <p><strong>Nome:</strong> xxxxx</p>
                <p><strong>Idade:</strong> xx</p>
                <p><strong>CPF:</strong> xxxxxxxxxxxx</p>
                <p><strong>Email:</strong> xxxxxxxxxxxxxx.xxx</p>
            </div>
        </div>
        <div class="schedule">
            <div class="notificacao-item">
                <img class="notificacao-img" src="../style/assets/tempestade.png" alt="">
                <div class="notificacao-info">
                    <p><strong>Tempestade:</strong></p>
                    <p>Causa: Alerta de fortes chuvas</p>
                </div>
            </div>
            <div class="notificacao-item">
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