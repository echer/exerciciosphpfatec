<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // requisição POST, salva os dados e depois
    // carrega para mostrar o resultado
    
    
} else {
    // requisição GET, apenas carrega dados para mostrar
    $cliente = ['nome' => 'teste', 'telefone' => ''];
}

require_once __DIR__ . '/interface/pagina_cliente_editar.php';
