<?php
    include ('conexao/conexao.php');

    $nome       = $_POST['nome'];
    $idade      = $_POST['idade'];
    $cpf        = $_POST['cpf'];
    $endereco   = $_POST['endereco'];

    $sql = "insert into tb_usuarios(nome,idade,cpf,endereco) values('$nome','$idade','$cpf','$endereco')";

    if ($sql) {
        echo "Cadastrado com sucesso!";
    }

    $qry = mysqli_query($con, $sql);