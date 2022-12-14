<?php
require 'config.php';
$id = filter_input(INPUT_POST, "id");
$nome = filter_input(INPUT_POST, "name");

if ($id && $nome) {
    $sql = $pdo->prepare('UPDATE todolist SET Tarefas=:name WHERE id=:id');
    $sql->bindValue(":name", $nome);
    $sql->bindValue(":id", $id);
    $sql->execute();

    header("Location: index.php");
} else {
    header("Location: adicionar.php");
    exit;
}
