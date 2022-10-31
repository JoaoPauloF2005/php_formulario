<?php

namespace  php_formulario\Controller;

use php_formulario\Model\CadastroLoginModel;

class CadastroLoginController extends Controller
{
    public static function index()
    {
        parent::render('CadastroLogin/FormCadastro');
    }

    public static function auth()
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
            header("Location: /login?erro=true");
    }

    public static function logout()
    {
        unset($_SESSION['cadastrologin']);

        parent::isAuthenticated();
    }
}
