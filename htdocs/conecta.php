<?php
session_start(); // Inicia a sessão

// Configurações do banco de dados MySQL
$host = "127.0.0.1";
$banco = "sistema";
$usuario = "root";
$senha = "";

// Conexão com o banco de dados usando PDO
try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    // Configura o PDO para mostrar erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retorna os dados como array associativo
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Erro de conexão com o banco de dados: " . $e->getMessage();
    exit;
}