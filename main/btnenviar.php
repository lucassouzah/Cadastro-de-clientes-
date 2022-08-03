<?php

    if(isset($_POST[submit]))
    {

        include_once('banco.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,email,telefone,sexo,data_nascimento
        ,cidade,estado,endereco)VALUES ('$nome','$email','$telefone','$genero','$data_nasc','$cidade','$estado','$endereco')");
    }

?>