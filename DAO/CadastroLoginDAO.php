<?php

namespace  php_formulario\DAO;

use  php_formulario\Model\CadastroLoginModel;
use \PDO;


class CadastroLoginDAO extends DAO
{  
    
    public function __construct()
    {
    
        parent::__construct();       
    }
    function insert(CadastroLoginModel $model) 
    {
        
        $sql = "INSERT INTO cadastro
                (nome, email, senha) 
                VALUES (?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        
       
        $stmt->execute();      

    }

    
    public function selectByCadastroLogin($nome, $email, $senha)
    {
        $sql = "SELECT * FROM cadastro WHERE nome = ?, WHERE email = ? AND senha = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $senha);
    
        $stmt->execute();

        return $stmt->fetchObject("php_formulario\Model\CadastroLoginModel"); 
    }


    }