<?php
    include("conexao.php");

    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql="INSERT INTO usuarios(nome, telefone, email, senha) VALUES ('$nome', '$telefone', '$email', '$senha')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso";
        header('Location: login.html');
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
        header('Location: registrar.html');
    }

    mysqli_close($conexao);
?>