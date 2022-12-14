<?php
require 'config.php';

$tarefa = filter_input(INPUT_POST, "name");
if ($tarefa) {
    $sql = $pdo->prepare("SELECT * FROM todolist WHERE tarefas=:tarefa");
    $sql->bindValue(":tarefa", $tarefa);
    $sql->execute();
    if ($tarefa) {
        $sql = $pdo->prepare("INSERT INTO todolist (id,tarefas) VALUES (0,:tarefas) ");
        $sql->bindValue(":tarefas", $tarefa);
        $sql->execute();

        header("Location:index.php");
        exit;
    }
} else {
    header("Location:adicionar.php");
    exit;
}
