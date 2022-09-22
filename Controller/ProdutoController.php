<?php

namespace php_formulario\Controller;

use php_formulario\Model\ProdutoModel;

class ProdutoController extends Controller
{

    public static function index() 
    {
        include 'Model/ProdutoModel.php'; 
        
       
        $model = new ProdutoModel();
        $model->getAllRows();
        include 'View/modules/Produto/ProdutoListar.php';
    }

    
    public static function form()
    {
        include 'Model/ProdutoModel.php'; 
        $model = new ProdutoModel();
      
        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Produto/ProdutoCadastro.php';
    }


    public static function save() {

        include 'Model/ProdutoModel.php'; 
        $produto = new ProdutoModel();
        $produto->id = $_POST['id'];
        $produto->nome = $_POST['nome'];
        $produto->preco = $_POST['preco'];
        $produto->descricao = $_POST['descricao'];
        
        $produto->save();  

        header("Location: /produto"); 
    }

    public static function delete()
    {
        include 'Model/ProdutoModel.php'; // inclusão do arquivo model.

        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /produto"); // redirecionando o usuário para outra rota.
    }

}