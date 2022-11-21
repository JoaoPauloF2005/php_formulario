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
        
        $sql = "INSERT INTO usuario
                (nome, email, senha) 
                VALUES (?, ?, sha1(?))";
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);
        
       
        $stmt->execute();      

    }

    public function update(CadastroLoginModel $model)
    {
        $sql = 'UPDATE usuario SET senha=? WHERE email = ? AND senha = ?';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->senha);
        $stmt->bindValue(2, $model->id);
        
        $stmt->execute();
    }


    public function select()
    {
        $sql = "SELECT * FROM usuario";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    } 

    public function selectById(int $id)
    {
        include_once 'Model/CadastroLogin.php';

        $sql = "SELECT * FROM usuario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CadastroLogin.Model"); 
    }
    
     /*public function selectEmail($email)
    {
        $sql = 'SELECT * FROM cadastro WHERE email=?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();

        return $stmt->fetchObject("php_formulario\Model\CadastroLoginModel");
    }*/

    }