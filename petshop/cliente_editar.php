<?php

require_once __DIR__ . '/bd/bd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // requisição POST, salva os dados e depois
    // carrega para mostrar o resultado
    
    
} else {
    $clientesObj = new Cliente();
    // requisição GET, apenas carrega dados para mostrar
    //$cliente = ['nome' => 'teste', 'telefone' => ''];
    $repoClientes = new RepositorioClientes();
    $cliente = $repoClientes->buscar($_GET["codigo"]);
}

require_once __DIR__ . '/interface/pagina_cliente_editar.php';
