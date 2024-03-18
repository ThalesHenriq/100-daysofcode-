<?php
// Dados de conexão
$host = "localhost"; // Endereço do servidor MySQL
$database = "conexao"; // Nome do banco de dados
$user = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL

// Conexão com o banco de dados
$mysqli = new mysqli($host, $user, $password, $database);

// Verificação de conexão

if ($mysqli -> connect_errno) {
    echo "Falha ao conectar:(" . $mysqli ->connect_errno .") " . $mysqli->connect_error;
} else 
    echo "Conectado!";

?>
