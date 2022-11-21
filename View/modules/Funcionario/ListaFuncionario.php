<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../css/home.css">

    <title>Lista Pessoas</title>
</head>
<body>

<?php include 'View/modules/Pagina Inicial/home.php' ?>


    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>Cargo</th>
         
         
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>

       

            <td>
                <a href="/funcionario/delete?id=<?= $item->Id ?>">X</a>
            </td>

          
            <td><?= $item->Id ?></td>

            <td>
                <a href="/funcionario/form?id=<?= $item->Id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->cargo ?></td>
        
            

        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>
