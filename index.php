<html>

<head>
<title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "54.234.153.24";
$username = "root";
$password = "Senha123";
$database = "meubanco";

<?php
$servername = getenv('DB_HOST') ?: "db_host";
$username   = getenv('DB_USER') ?: "root";
$password   = getenv('DB_PASS') ?: "Senha123";
$database   = getenv('DB_NAME') ?: "meubanco";

$link = new mysqli($servername, $username, $password, $database);

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
?>
<style>
    body { background-color: #1776f6; color: white; font-family: sans-serif; }
    .header { color: #ff8000; font-weight: bold; }
</style>