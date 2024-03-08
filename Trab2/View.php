<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>Coisas pra fazer!</h1>
    <ul>
        <?php foreach($tasks as $task): ?>
            <li><?php echo $task['tarefa']; ?> - <?php echo $task['completed'] ? 'Feito' : 'Pendente'; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
