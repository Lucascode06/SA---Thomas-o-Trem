<?php 
session_start();
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

    <main>
        <h1>SUPORTE</h1>
                
        <div class="options">
            <p>Motivo do Contato</p>
            <form id="infosuporte"> 
                <label><input type="radio" name="opcoes" value="bugs"> Bugs</label>
                <label><input type="radio" name="opcoes" value="pergunta"> Pergunta</label> 
                <label><input type="radio" name="opcoes" value="sugestao"> Sugestão</label>
                <div class="erro" id="erroselecione"></div>

        </div>

        <div class="box">
            <h3>Descreva o problema</h3> 
            <textarea placeholder="Digite sua mensagem" id="problema"></textarea>
            <div class="erro" id="erro"></div> 
            <button type="submit">Enviar</button> 
            </form>
            <p>Telefone para contato 📞</p> <p>+55-xx-xxxx-xxxx</p>

        </div>
    </main>
</body>

</html>