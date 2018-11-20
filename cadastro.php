<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $mensagem = $_POST['mensagem'];
    
    $query = "INSERT INTO mensagem(nome, email, cidade, estado, mensagem) VALUES ('$nome','$email','$cidade', '$estado', '$mensagem')";

    $resultado_usuario = mysqli_query($conn, $query);

    echo$resultado_usuario;
    
    // if($resultado_usuario)
    // {
    //     echo " 
    //     <script type=\"text/javascript\">
    //         alert(\"Usuario cadastrado com Sucesso.\");
    //         window.location.href='index.html';
    //     </script>";
    // }
    // else
    // {
    //     echo "
    //        <script type=\"text/javascript\">
    //             alert(\"O Usuario não foi cadastrado com Sucesso.\");
    //         </script>";    
    // }
?>
