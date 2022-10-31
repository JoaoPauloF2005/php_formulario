<?php

namespace  php_formulario\Model;

use  php_formulario\DAO\CadastroLoginDAO;


class CadastroLoginModel extends Model
{
    
    public $id, $nome, $email, $senha;


    public function autenticar()
       {
           $dao = new CadastroLoginDAO();
           
           $dados_usuario_logado = $dao->selectByCadastroLogin($this->nome, $this->email, $this->senha);
   
           if(is_object($dados_usuario_logado))
               return $dados_usuario_logado;
           else
               null;
       }}