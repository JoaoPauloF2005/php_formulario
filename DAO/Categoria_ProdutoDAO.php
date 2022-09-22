<?php
namespace php_formulario\DAO;

use php_formulario\Model\Categoria_ProdutoModel;
use \PDO;

class Categoria_ProdutoDAO extends DAO
{
 
    function __construct()
    {
        parent::__construct();
    }
    
    function insert(Categoria_ProdutoModel $model) 
    {
        
        $sql = "INSERT INTO categoria_produto 
                (descricao) 
                VALUES (?)";
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->descricao);
        
        
       
        $stmt->execute();      

    }
    public function update(Categoria_ProdutoModel $model)
    {
        $sql = "UPDATE categoria_produto SET descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM categoria_produto";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    } 

    public function selectById(int $id)
    {
        include_once 'Model/Categoria_ProdutoModel.php';

        $sql = "SELECT * FROM categoria_produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("Categoria_ProdutoModel"); 
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria_produto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
