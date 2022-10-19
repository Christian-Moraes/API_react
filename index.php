<?php

//Cabeçalhos
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once 'conexao.php';

$query_produtos = "SELECT id, titulo, descricao FROM produtos ORDER BY id DESC";
$result_produtos = $conn->prepare($query_produtos);
$result_produtos->execute();


foreach ($result_produtos as $key => $value) {
  extract($value);

  $lista_produtos["records"][$id] = [
    'id' => $id,
    'titulo' => $titulo,
    'descricao' => $descricao
  ];
}

//Resposta status 200

http_response_code(200);

//Retornar em json

echo json_encode($lista_produtos)
?>