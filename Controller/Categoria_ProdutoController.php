<?php
namespace php_formulario\Controller;

use php_formulario\Model\Categoria_ProdutoModel;

class Categoria_ProdutoController extends Controller
{

    public static function index() 
    {
        include 'Model/Categoria_ProdutoModel.php'; 
        
       
        $model = new Categoria_ProdutoModel();
        $model->getAllRows();
        include 'View/modules/Categoria_Produto/Categoria_ProdutoForm.php';
    }

    
    public static function form()
    {
        include 'Model/Categoria_ProdutoModel.php'; 
        $model = new Categoria_ProdutoModel();
      
        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Categoria_Produto/Categoria_ProdutoCadastro.php';
    }


    public static function save() {

        include 'Model/Categoria_ProdutoModel.php'; 
        $categoria_produto = new Categoria_ProdutoModel();
        $categoria_produto->id = $_POST['id'];
        $categoria_produto->descricao = $_POST['descricao'];
       

        $categoria_produto->save();  

        header("Location: /Categoria_Produto"); 
    }

    public static function delete()
    {
        include 'Model/Categoria_ProdutoModel.php'; // inclusão do arquivo model.

        $model = new Categoria_ProdutoModel();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /Categoria_Produto"); // redirecionando o usuário para outra rota.
    }

}