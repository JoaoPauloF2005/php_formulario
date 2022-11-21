<?php

namespace php_formulario\Controller;

use php_formulario\Model\PessoaModel;

class PessoaController extends Controller
{

    public static function index() 
    {
        include 'Model/PessoaModel.php'; 
        
       
        $model = new PessoaModel();
        $model->getAllRows();
        include 'View/modules/Pessoa/ListaPessoa.php';
    }

    
    public static function form()
    {
        include 'Model/PessoaModel.php'; 
        $model = new PessoaModel();
      
        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Pessoa/FormPessoa.php';
    }


    public static function save() {

        include 'Model/PessoaModel.php'; 
        $pessoa = new PessoaModel();
        $pessoa->id = $_POST['id'];
        $pessoa->nome = $_POST['nome'];
        $pessoa->rg = $_POST['rg'];
        $pessoa->cpf = $_POST['cpf'];
        $pessoa->data_nascimento = $_POST['data_nascimento'];
        $pessoa->email = $_POST['email'];
        $pessoa->telefone = $_POST['telefone'];
        $pessoa->endereco = $_POST['endereco'];

        $pessoa->save();  

        header("Location: /pessoa"); 
    }

    public static function delete()
    {
        include 'Model/PessoaModel.php'; // inclusão do arquivo model.

        $model = new PessoaModel();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /pessoa"); // redirecionando o usuário para outra rota.
    }

}