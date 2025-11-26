<?php

include '../db.php';
session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true;

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "UPDATE usuarios SET nome ='$nome',email ='$email', senha='$senha' WHERE id=$id";

    if ($mysqli->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='read.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $mysqli->error;
    }
    $mysqli->close();
    exit(); 
}

$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/script.js"></script>
</head>
<body id="update-page">
    <div class="container">
        <header>
            <img src="../style/assets/thomasotrem.png" alt="Logo" class="logo">
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
    <main>
        <section class="cadastro-section"
            style="display: flex; justify-content: center; align-items: center; min-height: 60vh;">
            <div class="login-container" style="display: flex; justify-content: center; align-items: center;">
                <div class="card" style="margin: 0 auto;">
                    <h1 class="titulo">Atualizar Usuário</h1>
                    <form id="viacep-form" method="post" action="update.php?id=<?php echo $row['id'];?>">
                        <input type="text" name="nome" placeholder="Nome" required value="<?php echo $row['nome']; ?>">
                        <input type="email" name="email" placeholder="E-mail" required value="<?php echo $row['email']; ?>">
                        <input type="password" name="senha" placeholder="Senha" required value="<?php echo $row['senha']; ?>">

                        <label for="viacep-cep" style="font-weight:600; margin-top:8px;">CEP:</label>
                        <input type="text" id="viacep-cep" name="cep" maxlength="8" placeholder="Digite apenas números">

                        <label for="viacep-rua" style="font-weight:600; margin-top:8px;">Rua:</label>
                        <input type="text" id="viacep-rua" name="rua" readonly>

                        <label for="viacep-bairro" style="font-weight:600; margin-top:8px;">Bairro:</label>
                        <input type="text" id="viacep-bairro" name="bairro" readonly>

                        <label for="viacep-cidade" style="font-weight:600; margin-top:8px;">Cidade:</label>
                        <input type="text" id="viacep-cidade" name="cidade" readonly>

                        <label for="viacep-uf" style="font-weight:600; margin-top:8px;">Estado:</label>
                        <input type="text" id="viacep-uf" name="uf" readonly>

                        <button type="submit">Cadastrar Funcionário</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script>
        function toggleMenu() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        }
    </script>
    <script src="../script/script.js"></script>
</body>

</html>