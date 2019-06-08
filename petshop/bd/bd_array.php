<?php

function bd_listar_clientes($nome_pesquisa) {
    $clientes = [
        ['nome' => 'Thanos', 'telefone' => '(17) 88888-9999'],
        ['nome' => 'Aranha', 'telefone' => '(17) 2222-2222'],
        ['nome' => 'Hulk', 'telefone' => '(18) 9999-9999'],
        ['nome' => 'Thor', 'telefone' => '(17) 0000-0000'],
    ];
    
    if (empty($nome_pesquisa)) {
        return $clientes;
    }
    
    $clientes_filtrados = [];
    foreach ($clientes as $c) {
        $este_nome = $c['nome'];
        if (stripos($este_nome, $nome_pesquisa) !== false) {
            $clientes_filtrados[] = $c;
        }
    }

    return $clientes_filtrados;
}