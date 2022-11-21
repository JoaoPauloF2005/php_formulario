<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../css/home.css">

    <title>Cadastro de Pessoa</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/Categoria_Produto/save" method="post">

    <?php include 'View/modules/Pagina Inicial/home.php' ?>

        <fieldset>
            <legend>Categoria de Produto</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="descricao">Descrição:</label>
            <input id="descricao" name="descricao" value="<?= $model->descricao ?>" type="text" />

            
            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>