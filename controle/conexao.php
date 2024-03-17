<?php
// Dados de conexão
$host = "localhost"; // Endereço do servidor MySQL
$user = "seu_usuario"; // Nome de usuário do MySQL
$password = "sua_senha"; // Senha do MySQL
$database = "seu_banco_de_dados"; // Nome do banco de dados

// Conexão com o banco de dados
$conn = mysqli_connect($host, $user, $password, $database);

// Verificação de conexão
if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Selecionando o banco de dados
mysqli_select_db($conn, $database);

// Agora você está conectado ao banco de dados!
// Use $conn para executar consultas e interagir com as tabelas.
?>
