<?php

use php_formulario\Controller\CadastroLoginController;
use php_formulario\Controller\LoginController;
use php_formulario\Controller\PessoaController;
use php_formulario\Controller\ProdutoController;
use php_formulario\Controller\Categoria_ProdutoController;
use php_formulario\Controller\FuncionarioController;
use php_formulario\DAO\CadastroLoginDAO;

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{

    case '/home':
        include 'View/modules/Pagina Inicial/home.php';
    break;

    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;



    case '/':
        echo "página inicial";
        break;

    case '/cadastrologin/form':
        CadastroLoginController::form();
    break;

    case '/cadastrologin/save':
        CadastroLoginController::save();
    break;

    case '/cadastrologin/update':
        CadastroLoginController::update();
    break;

    case '/':
        echo "página inicial";
        break;
        

        
 
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
          PessoaController::delete();
    break;
    

    
    //rotas produto
    case '/produto':
        ProdutoController::index();
    break;
    
    case '/produto/form':
        ProdutoController::form();
        break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
          ProdutoController::delete();
    break;
    
    


    case '/Categoria_Produto':
        Categoria_ProdutoController::index();
    break;
    
    case '/Categoria_Produto/form':
        Categoria_ProdutoController::form();
        break;

    case '/Categoria_Produto/save':
        Categoria_ProdutoController::save();
    break;

    case '/Categoria_Produto/delete':
           Categoria_ProdutoController::delete();
    break;

    default:
        echo "erro 404";
    break;

    case '/funcionario':
          FuncionarioController::index();
    break;

    case '/funcionario/form':
          FuncionarioController::form();
    break;

    case '/funcionario/save':
          FuncionarioController::save();
    break;
    
    case '/funcionario/delete':
          FuncionarioController::delete();
    break;
}

