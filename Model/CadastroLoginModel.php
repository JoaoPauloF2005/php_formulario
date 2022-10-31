<?php

namespace  php_formulario\Model;

use  php_formulario\DAO\CadastroLoginDAO;


class CadastroLoginModel extends Model
{
    
    public $id, $nome, $email, $senha;

    public function save()
    {
        include 'DAO/CadastroLoginDAO.php';

        $dao = new CadastroLoginDAO();

        if(empty($this->id))
        {
           
            $dao->insert($this);
        } 
        else 
        {
           
      
        }
    }
        public function getAllRows()
        {
            include 'DAO/CadastroLoginDAO.php';
            $dao = new CadastroLoginDAO();
            $this->rows = $dao->select();
        }


        public function getById(int $id)
        {
            include 'DAO/CadastroLoginDAO.php';

            $dao = new CadastroLoginDAO();

            $obj = $dao->selectById($id);

            return ($obj) ? $obj : new CadastroLoginModel();
        }



    public function autenticar()
       {
           $dao = new CadastroLoginDAO();
           
           $dados_usuario_cadastro = $dao->selectByCadastroLogin($this->nome, $this->email, $this->senha);
   
           if(is_object($dados_usuario_cadastro))
               return $dados_usuario_cadastro;
           else
               null;
       }}