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
            <h1>MANUTENÇÃO</h1>
            <div>
                <div>
                    <div class="box">
                        <img class="manutencao-img" src="../style/assets/trilho.png" alt="">
                        <div class="manutencao-info">
                            <p><strong>Inspeção de Rodas e Trilhos</strong></p>
                        </div>
                        <div class="botoes">
                            <button><i class="fas fa-check"></i></button>
                            <button><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box">
                        <img class="manutencao-img" src="../style/assets/motor_1.png" alt="">
                        <div class="manutencao-info">
                            <p><strong>Manutenção do Motor</strong></p>
                        </div>
                        <div class="botoes">
                            <button><i class="fas fa-check"></i></button>
                            <button><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box">
                        <img class="manutencao-img" src="../style/assets/motor-removebg-preview.png" alt="">
                        <div class="manutencao-info">
                            <p><strong>Manutenção do Sistema de Freios</strong></p>
                        </div>
                        <div class="botoes">
                            <button><i class="fas fa-check"></i></button>
                            <button><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box">
                        <img class="manutencao-img" src="../style/assets/vagao.png" alt="">
                        <div class="manutencao-info">
                            <p><strong>Inspeção de Vagões</strong></p>
                        </div>
                        <div class="botoes">
                            <button><i class="fas fa-check"></i></button>
                            <button><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>


        </main>
    </div>
    <script src="../script/dash.js"></script>
</body>
</html>

