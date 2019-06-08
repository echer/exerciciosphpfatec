<?php

require_once __DIR__ . '/bd/bd.php';

$repoClientes = new RepositorioClientes();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // requisição POST, salva os dados e depois
    // carrega para mostrar o resultado
    $repoClientes->atualizar($_GET["codigo"],$_POST["nome"],$_POST["telefone"]);
    $cliente = $repoClientes->buscar($_GET["codigo"]);
    
} else {
    // requisição GET, apenas carrega dados para mostrar
    $cliente = $repoClientes->buscar($_GET["codigo"]);
}

require_once __DIR__ . '/interface/pagina_cliente_editar.php';
