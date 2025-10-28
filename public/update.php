<?php

include '../db.php';

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
            <li><a href="dashboard.php">Início</a></li>
            <li><a href="rotas.html">Rotas</a></li>
            <li><a href="notificacao.html">Notificação</a></li>
            <li><a href="relatorio.html">Relatório</a></li>
            <li><a href="manutencao.html">Manutenção</a></li>
            <li><a href="suporte.html">Suporte</a></li>
            <li><a href="viacep.php">Endereço</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
    <main>
        <h1 class="titulo">Atualizar Usuário</h1>
        <form class="update-form" method="POST" action="update.php?id=<?php echo $row['id'];?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $row['nome'];?>" required>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $row['email'];?>" required>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" value="<?php echo $row['senha'];?>" required>
            <input class="btn-atualizar" type="submit" value="Atualizar">
        </form>
        <a class="btn-voltar" href="read.php">Ver registros</a>
    </main>
    <script>
        function toggleMenu() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>

</html>