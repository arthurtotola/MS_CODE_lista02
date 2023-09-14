<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $comentario = $_POST['comentario'];
   
    $conexao = new mysqli("localhost","root","","blog");

    if ($conexao -> connect_error) {
        die("A conecxão falhou".$conexao -> connect_error);
    }

    $sql_comentario = "INSERT INTO comentarios (nome, comentario)VALUES ('$nome','$comentario')";

    if ($conexao -> query($sql_comentario) === TRUE) {
        echo "Comentário inserido com sucesso!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }else{
        echo "Erro na inserção do comentário".$sql_comentario."<br>";
    }

    $conexao -> close();
}


?>