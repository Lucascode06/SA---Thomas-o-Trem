<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body id="read-page">
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
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
    <main>
        <h1 class="titulo">Lista de Usuários</h1>
        <div class="usuarios-table-wrapper">
            <?php
            include '../db.php';
            $sql = "SELECT * FROM usuarios";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                echo "<table class='usuarios-table' border='0'>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Ações</th>
                    </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['nome']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['senha']}</td>
                            <td>
                                <a class='btn-editar' href='update.php?id={$row['id']}'>Editar</a>
                                <a class='btn-excluir' href='delete.php?id={$row['id']}'>Excluir</a>
                            </td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<div class='msg'>Nenhum registro encontrado.</div>";
            }
            $mysqli->close();
            ?>
        </div>
        <a class="btn-novo" href="create.php">Inserir novo Registro</a>
    </main>
    <script>
        function toggleMenu() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>