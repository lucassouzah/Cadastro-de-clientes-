<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassaword = '';
    $dbName = 'formulario-clientes';


    $conexao = new mysqli($dbHost ,$dbUsername,$dbPassaword,$dbName );

    if($conexao->connect_errno)
    {
        echo "Erro , Verifique sua conexão com o banco";
    }

    else
    {
        echo "Conexão efetuada com sucesso";

    }
?>
