<?php

// Obtém os dados enviados por POST
$id_produto = $_POST['id_produto'];
$id_usuario = $_POST['id_usuario'];

// Estabelece a conexão com o banco de dados
$conexao = mysqli_connect("", "", "", "");

// Cria a consulta SQL para adicionar o produto ao carrinho
$query = "INSERT INTO carrinho (id_produto, id_usuario) VALUES ('$id_produto', '$id_usuario')";

// Executa a consulta SQL
mysqli_query($conexao, $query);

?>
