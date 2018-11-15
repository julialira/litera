<?php
    $servidor = "127.0.0.1";
    $usuario = "ifms";
    $senha = "12345";
    $dbname = "comentario";
    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    

    if($conn){
        die("Falha na conexao:gsssg " . mysqli_connect_error());
    }else{
        echo "Conexao realizada com sucesso";
    }  
?>