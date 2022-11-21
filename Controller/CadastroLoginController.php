<?php

namespace  php_formulario\Controller;

use php_formulario\Model\CadastroLoginModel;

class CadastroLoginController extends Controller
{
    public static function form()
    {
        $model = new CadastroLoginModel();
    
            if(isset($_GET['id']))
                $model = $model->getById( (int) $_GET['id']);

        parent::render('Cadastro/FormCadastro', $model);
    }

    /*public static function auth()
    {
        $model = new CadastroLoginModel();

        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];


        $cadastrologin = $model->autenticar();

        if ($cadastrologin !== null) {

            $_SESSION['cadastrologin'] = $cadastrologin;

            header("Location: /");

        } else
            header("Location: /cadastrologin?erro=true");
    }
*/

    public static function save()
    {
        $cadastro = new CadastroLoginModel();

        $cadastro->id = $_POST['id'];
        $cadastro->nome = $_POST['nome'];
        $cadastro->email = $_POST['email'];
        $cadastro->senha = $_POST['senha'];
        $cadastro->save();

        header("Location: /login");
    }

    public static function update()
    {
        $model = new CadastroLoginModel();

        parent::render('Cadastro/FormSenha', $model);
    }

}
