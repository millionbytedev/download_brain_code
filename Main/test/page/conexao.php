<?php
    $login="aluno";
    $senha="1234";
    $banco="portal_aluno";
    $endereco="localhost";

    $mysqli = new mysqli($endereco, $login, $senha, $banco);

    if ($mysqli->connect_errno){
        echo "Connect faliled: " . $mysqli->connect_error;
        exit();
    }

    

    
?>
