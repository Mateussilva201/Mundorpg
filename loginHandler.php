<?php
include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $senha = $_POST['password'];

    // Proteção contra SQL Injection
    $usuario = $conexao->real_escape_string($usuario);
    $senha = $conexao->real_escape_string($senha);

    // Insere no banco
    $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Usuário cadastrado com sucesso!'); window.location.href='frontpage.php';</script>";
    } else {
        echo "Erro: " . $conexao->error;
    }
}
?>
