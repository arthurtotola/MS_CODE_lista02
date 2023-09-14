<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $conexao = new mysqli("localhost","root","","empresa");
    if ($conexao->connect_error) {
         die("Conexão Falhou: " .$conexao->connect_error);
    }

    //Inserção dos dados na tabela. 
    $sql_cadastro = "SELECT * FROM cadastro WHERE nome='$nome' AND senha='$senha';";

    //Executando a consulta.
    $resultado = $conexao->query($sql_cadastro);

    //Verificando se a consulta tem algum erro ou se não retorma valores.
    if($resultado && $resultado->num_rows > 0){
        echo "Login realizado com sucesso";
    }else{
        echo "Usuário ou senha inválidos";
    }

    //Finalizar a conexão
    $conexao->close();

}
?>