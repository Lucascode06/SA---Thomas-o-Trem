<?php
$mysqli = new mysqli("localhost", "root", "root", "thomasdb");
if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}
?>
