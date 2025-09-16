<?php
// 1) Conexão
$mysqli = new mysqli("localhost", "root", "root", "thomasdb");
if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}

session_start();

// 2) Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

// 3) Login
$msg = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"] ?? "";
    $senha = $_POST["senha"] ?? "";

    $stmt = $mysqli->prepare("SELECT id, email, senha FROM usuarios WHERE email=? AND senha=?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $result = $stmt->get_result();
    $dados = $result->fetch_assoc();
    $stmt->close();

    if ($dados) {
        $_SESSION["id"] = $dados["id"];
        $_SESSION["email"] = $dados["email"];
        header("Location: public/dashboard.php");
        echo "Login bem-sucedido!";
        exit;
    } else {
        $msg = "Usuário ou senha incorretos!";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=WDXL+Lubrifont+TC&display=swap">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <img id="thomas" src="./style/assets/thomasotrem.png" alt="">

    <div class="login-container">

        <?php if (!empty($_SESSION["id"])): ?>

        <div class="card">

            <h3>Bem-vindo!</h3>
            <p>Sessão ativa.</p>
            <p><a href="?logout=1">Sair</a></p>

        </div>

        <?php else: ?>

        <div class="card">
            <h3>Login</h3>
            <?php if ($msg): ?>
                <p class="msg"><?php echo $msg; ?></p>

        <?php endif; ?>

                <form method="post">
                    <input type="email" name="email" placeholder="E-mail" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <button type="submit">Entrar</button>
                </form>

            <?php endif; ?>
        </div>

        <a href="public/esqueceuasenha.html">Esqueceu a senha?</a>
    </div>

</body>

</html>