<?php

// Obtém o ID do item a ser removido do carrinho da requisição POST
$id = $_POST['id'];

// Estabelece a conexão com o banco de dados
$conexao = mysqli_connect("", "", "", "");

// Executa a consulta para excluir o item do carrinho com base no ID
$query = "DELETE FROM carrinho WHERE id_compra='$id'";
mysqli_query($conexao, $query);

?>
