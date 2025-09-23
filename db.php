<?php
$mysqli = new mysqli("localhost", "root", "", "thomasdb");
if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}
?>
