<?php

namespace Teste\Clientes;


class Cliente {
    
    public static $quantidadeClientes = 0;
    
    public $idade;
    
    public static function mostrar_quantidade() {
        echo 'temos ' . Cliente::$quantidadeClientes . ' clientes!';
    }
    
    public function __construct($dados_iniciais = []) {
        if (isset($dados_iniciais['nome'])) {
            $this->nome = $dados_iniciais['nome'];
        }
        if (isset($dados_iniciais['idade'])) {
            $this->idade = $dados_iniciais['idade'];
        }
        
        Cliente::$quantidadeClientes++;
    }
    
    private function mostrar_idade() {
        echo 'idade = ' . $this->idade . '<br>';
    }
    
    public function vai() {
        $this->mostrar_idade();
    }
    
    public function desconto() {
        return 0.0;
    }
    
}


class ClienteEspecial extends Cliente {
    
    public function dar_brinde() {
        echo 'chaveirinho!';
    }
    
    public function desconto() {
        return 10.0;
    }
    
}
