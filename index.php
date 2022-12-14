<?php
require 'config.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM todolist");
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todolist</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <div class="container">
        <table border=1>
            <tr>
                <th>Tarefa</th>
                <th>Opções</th>
            </tr>
            <?php
            foreach ($lista as $tarefas) : ?>
                <tr>
                    <td><?= $tarefas['Tarefas'] ?> </td>

                    <td>
                        <a href="editar.php?id=<?= $tarefas['id'] ?>" class="btn-edit">Editar</a>
                        <a href="execluir.php?id=<?= $tarefas['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')" class="btn-delete">Excluir</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

    <div class="container-btn">
        <a href="adicionar.php" class="btn-adicionar">Adicionar tarefas</a>

    </div>
</body>

</html>