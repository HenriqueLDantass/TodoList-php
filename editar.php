<?php
require 'config.php';
$info = [];
$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $sql = $pdo->prepare("SELECT*FROM todolist WHERE id=:id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }
} else {
    header('Location:index.php');
    exit;
}
?>

<h1> Editar Tarefa</h1>

<form method="POST" action="editar_action.php">
    <label>
        <input type="hidden" name="id" value="<?= $info['id']; ?>">
        Tarefa:
        </br>
        <input type="text" name="name" value="">
        </br>
    </label>

    <input type="submit" value="Salvar">
</form>