<?php
session_start();
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $db = new Database();
    $stmt = $db->conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

      
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];
            header('Location: dashboard.php');  
            exit;
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }

    $stmt->close();
    $db->close();
}
?>


