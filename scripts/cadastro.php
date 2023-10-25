<?php

    require_once "scripts/config.php"; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $hashed_password = password_hash($senha, PASSWORD_DEFAULT);


        $sql = "INSERT INTO usarios (nome, email, senha) VALUES (?, ?, ?)";

        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param("sss", $nome, $email, $hashed_password); 

        if ($stmt->execute()) {
            echo "Usuário criado com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $coon->error;
        }

        $stmt->close();


    }
    $conn->close();