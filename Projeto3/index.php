<?php

$conteudo = [
    '1' => 'Primeiro conteúdo',
    '2' => 'Segundo conteúdo',
    '3' => 'Terceiro conteúdo'
];

$metodo = $_SERVER['REQUEST_METHOD'];


header('Content-Type: application/json');


function enviarResposta($codigo, $mensagem) {
    http_response_code($codigo);
    echo json_encode(['mensagem' => $mensagem]);
    exit;
}


if ($metodo === 'GET') {
    $id = $_GET['id'] ?? null;

    if (array_key_exists($id, $conteudo)) {
        enviarResposta(200, $conteudo[$id]);
    } else {
        enviarResposta(404, 'Conteudo nao encontrado');
    }
}


if ($metodo === 'POST') {
    $usuario = $_POST['usuario'] ?? null;
    $senha = $_POST['senha'] ?? null;

    
    if ($usuario !== 'admin' || $senha !== 'admin123') {
        enviarResposta(401, 'Credenciais inválidas');
    }

    
    enviarResposta(200, 'Requisição POST bem-sucedida');
}


enviarResposta(500, 'Método não suportado');
