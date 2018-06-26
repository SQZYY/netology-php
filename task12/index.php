<?php

$pdo = new PDO("mysql:host=localhost;dbname=homework;charset=utf8", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$sql = "SELECT * FROM books";
$statement = $pdo->prepare($sql);
$statement->execute();

?>

<!Doctype html>
<html>
    <head>
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
        </style>
    </head>
    <body>
        <h1>Библиотека успешного человека</h1>
        <table>
            <tr>
                <th>Название</th>
                <th>Автор</th>
                <th>Год выпуска</th>
                <th>Жанр</th>
                <th>ISBN</th>
            </tr>
            <?php foreach ($statement as $row) { ?>
            <tr>
                <td><?= htmlspecialchars($row["name"], ENT_QUOTES);?></td>
                <td><?= htmlspecialchars($row["author"], ENT_QUOTES);?></td>
                <td><?= htmlspecialchars($row["year"], ENT_QUOTES);?></td>
                <td><?= htmlspecialchars($row["genre"], ENT_QUOTES);?></td>
                <td><?= htmlspecialchars($row["isbn"], ENT_QUOTES);?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>