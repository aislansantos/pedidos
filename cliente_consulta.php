<?php
require('conexao.php');

require('assets/class/cliente.class.php');
$cliente = new Cliente($pdo);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta - Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</head>

<body>
    <?php require('../pedidos/assets/menu/menu.php'); ?>
    <div class="container">
        <table class="table table-striped table-hover" id="clientesTable">
            <thead>
                <th scope="col">Nome</td>
                <th scope="col">Ação</td>
            </thead>
            <?php
            $lista = $cliente->carregaTable();
            foreach ($lista as $item) :
            ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $item['nome']; ?>
                        </td>
                        <td>
                            <a href="<?php echo 'cliente_Salvar.php?id=' . $item['id']; ?>" class="btn btn-light">CONSULTAR</a>
                            <a href="<?php echo 'cliente_Deletar.php?id=' . $item['id'] . '&nome=' . $item['nome']; ?>" class="btn btn-light">EXCLUIR</a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>

    </div>
</body>

</html>