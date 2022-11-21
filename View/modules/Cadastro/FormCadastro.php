<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../css/home.css">

    <title>Formulário de Usuários</title>
</head>

<body>
<form action="/cadastrologin/save" method="post">

<header>
        <?php include 'View/modules/Pagina Inicial/home.php' ?>
    </header>

        <fieldset>
            <legend> Cadastro de Usuários </legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome"> Nome: </label>
            <input type="text" name="nome" id="nome" value="<?= $model->nome ?>" />

            <br> <br>

            <label for="email"> Email: </label>
            <input type="text" name="email" id="email" value="<?= $model->email ?>" />

            <br> <br>

            <label for="senha"> Senha: </label>
            <input type="password" name="senha" id="senha" value="<?= $model->senha ?>" />

            <br> <br>

            <button type="submit"> Enviar: </button>
        </fieldset>
    </form>
</body>
</html>