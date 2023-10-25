<?php
// Conexão com o banco de dados
$conexao = mysqli_connect("localhost", "root", "", "petshop");

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Recebe os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta o banco de dados para verificar as credenciais
$query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$resultado = mysqli_query($conexao, $query);

if (mysqli_num_rows($resultado) == 1) {
    // Usuário autenticado com sucesso
    session_start();
    $_SESSION['email'] = $email;
    header("Location: index.php"); // Redirecionar para a página principal após o login
} else {
    // Login falhou
    echo "Login falhou. Por favor, verifique suas credenciais.";
}

mysqli_close($conexao);
?>
