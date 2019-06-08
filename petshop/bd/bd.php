<?php

// padrão Repositório
class RepositorioClientes {
    private $conexao;
    
    public function __construct() {
        //$this->conexao = new PDO('mysql:dbname=petshop;host=127.0.0.1;charset=UTF8', 'usu_petshop', '123456');
        $this->conexao = new PDO('mysql:dbname=petshop;host=172.17.0.2;charset=UTF8', 'root', '123456');
        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    
    public function listar_clientes($nome_pesquisa) {
        $consulta = $this->conexao->prepare("
    select * from clientes
    where nome like ?
    order by nome
    ");

        $consulta->execute(['%' . $nome_pesquisa . '%']);

        return $consulta->fetchAll();
    }

    public function buscar($id) {
        $consulta = $this->conexao->prepare("
                                                select * from clientes
                                                where codigo = ?
                                            ");

        $consulta->execute([$id]);

        return $consulta->fetch();
    }

    public function salvar($cliente) {
        // ...
        
        /*$consulta->execute([
            $this['nome'],
            $this['telefone']
        ]);*/

    }
}


// padrão Active Record
class Cliente {
    private static $conexao;
    
    private static function conectar() {
        if (Cliente::$conexao == null) {
            Cliente::$conexao = new PDO('mysql:dbname=petshop;host=127.0.0.1;charset=UTF8',
                'usu_petshop', '123456');
            Cliente::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            Cliente::$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_CLASS);
        }        
    }
    
    public $codigo;
    
    public $nome;
    
    public $telefone;
    
    public static function listar_clientes($nome_pesquisa) {
        Cliente::conectar();
        
        $consulta = Cliente::$conexao->prepare("
    select * from clientes
    where nome like ?
    order by nome
    ");

        $consulta->execute(['%' . $nome_pesquisa . '%']);
        $consulta->setFetchMode(PDO::FETCH_CLASS, 'Cliente');

        return $consulta->fetchAll();
    }
    
    public function salvar() {
        // ...
        
        $consulta->execute([
            $this->nome,
            $this->telefone
        ]);
    }
}
