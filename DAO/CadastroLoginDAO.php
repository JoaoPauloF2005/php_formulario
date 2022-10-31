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

    public function select()
    {
        $sql = "SELECT * FROM cadastro";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    } 

    public function selectById(int $id)
    {
        include_once 'Model/CadastroLogin.php';

        $sql = "SELECT * FROM cadastro WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CadastroLogin.Model"); 
    }
    
    public function selectByCadastroLogin($nome, $email, $senha)
    {
        $sql = "SELECT * FROM cadastro SET nome = ?, WHERE email = ? AND senha = sha1(?) ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $senha);
    
        $stmt->execute();

        return $stmt->fetchObject("php_formulario\Model\CadastroLoginModel"); 
    }


    }