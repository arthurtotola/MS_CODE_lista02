<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $conexao = new mysqli("localhost","root","","empresa");
    if ($conexao->connect_error) {
         die("Conexão Falhou: " .$conexao->connect_error);
    }

    //Inserção dos dados na tabela. 
    $sql_cadastro = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome','$email','$senha')";

    //Executando a consulta.
    if ($conexao->query($sql_cadastro) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    }else{
        echo "Erro na consulta: ".$sql_cadastro."<br>".$conexao->error;
    }

    //Finalizar a conexão
    $conexao->close();

}
?>