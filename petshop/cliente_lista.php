<?php

require_once __DIR__ . '/bd/bd.php';

$nome_pesquisa = $_REQUEST['nome'] ?? '';

// padrão Repositório
$repoClientes = new RepositorioClientes();
$clientes = $repoClientes->listar_clientes($nome_pesquisa);
//echo '<pre>';var_dump($clientes);echo '<pre>';
//$clientes[0]['nome'] = 'nome novo';
//$repoClientes->salvar($clientes[0]);

// padrão Active Record
//$clientes = Cliente::listar_clientes($nome_pesquisa);
//echo '<pre>';var_dump($clientes);echo '<pre>';
//$clientes[0]->nome = 'nome novo';
//$clientes[0]->salvar();

require_once __DIR__ . '/interface/pagina_cliente_lista.php';
