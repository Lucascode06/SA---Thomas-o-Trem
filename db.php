<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "thomasdb";

$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
}
?>
