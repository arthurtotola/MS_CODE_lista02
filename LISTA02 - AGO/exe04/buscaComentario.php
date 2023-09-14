<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de Conexão: " . $conn->connect_error);
}

// Consulta para selecionar nomes de usuário e comentários da tabela
$sql = "SELECT nome, comentario FROM comentarios ORDER BY ID DESC";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Retorna os dados como JSON
echo json_encode($data);

$conn->close();
?>
