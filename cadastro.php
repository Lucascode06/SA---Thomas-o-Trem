<?php
// 1) Conexão
include 'db.php';

session_start();

// 3) CADASTRO
$msg = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $senha = $_POST["senha"] ?? "";

    $stmt = $mysqli->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);
    $stmt->execute();
    $stmt->close();

    $msg = "Funcionário cadastrado com sucesso!";
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
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <img id="thomas" src="./style/assets/thomasotrem.png" alt="">

    <div class="login-container">

        <?php if (!empty($_SESSION["id"])): ?>

        <?php else: ?>

        <div class="card">
            <h3>Cadastro</h3>
            <?php if ($msg): ?>
                <p class="msg"><?php echo $msg; ?></p>

        <?php endif; ?>

                <form method="post">
                    <input type="text" name="nome" placeholder="Nome" required>
                    <input type="email" name="email" placeholder="E-mail" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <button type="submit">Cadastrar Funcionário</button>
                </form>

            <?php endif; ?>
        </div>


    </div>

</body>

</html>