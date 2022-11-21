<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../css/home.css">

    <title>Cadastro de Produto</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/funcionario/save" method="post">

    <?php include 'View/modules/Pagina Inicial/home.php' ?>

        <fieldset>
            <legend>Cadastro de Funcionario</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="cargo">Cargo:</label>
            <input id="cargo" name="cargo" value="<?= $model->cargo ?>" type="text" />

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>