<?php

$pdo = new PDO("mysql:host=localhost;dbname=homework;charset=utf8", "root", "1234", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

if (isset($_POST['description']) ? $_POST['description'] : '') {
    $desc = $_POST['description'];
    $add = "INSERT INTO tasks (description, date_added) VALUES (:description, CURRENT_TIME)";
    $statementTwo = $pdo->prepare($add);
    $statementTwo->bindValue(':description', $desc);
    $statementTwo->execute();
    header("location:/secondsql.php");
}

if (isset($_GET['id']) ? $_GET['id'] : '') {
    $id = $_GET['id'];
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'done') {
            $done = "UPDATE tasks SET is_done = 1 WHERE id = $id";
            $statementFour = $pdo->prepare($done);
            $statementFour->execute();
            header("location:/secondsql.php");
        }
        if ($_GET['action'] == 'delete') {
            $delete = "DELETE FROM tasks WHERE id = $id";
            $statementThree = $pdo->prepare($delete);
            $statementThree->execute();
            header("location:/secondsql.php");
        }
    }
}

$sql = "SELECT * FROM tasks";
$statementOne = $pdo->prepare($sql);
$statementOne->execute();

?>

<html>
<style>
    table {
        border-spacing: 0;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }

    table th {
        background: #eee;
    }

    span.orange {
        color: orange;
    }

    span.green {
        color: green;
    }
</style>
<h1>Список дел на сегодня</h1>
<div style="float: left">
    <form method="POST">
        <input type="text" name="description" placeholder="Описание задачи"/>
        <input type="submit" name="add" value="Добавить" />
    </form>
</div>
<div style="clear: both"></div>
<table>
    <tr>
        <th>Описание задачи</th>
        <th>Дата добавления</th>
        <th>Статус</th>
        <th></th>
    </tr>
    <?php foreach ($statementOne as $row) { ?>
    <tr>
        <td><?= htmlspecialchars($row["description"], ENT_QUOTES);?></td>
        <td><?= htmlspecialchars($row["date_added"], ENT_QUOTES);?></td>
        <td><?php if ($row["is_done"] == 0) { echo '<span class="orange">В процессе</span>';
            } else { echo '<span class="green">Выполнено</span>';} ?></td>
        <td>
            <a href='?id=<?= $row["id"] ?>&action=done'>Выполнить</a>
            <a href='?id=<?= $row["id"] ?>&action=delete'>Удалить</a>
        </td>
    </tr>
    <?php } ?>
</table>
</html>