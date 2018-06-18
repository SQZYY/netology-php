<?php

require_once 'functions.php';

if (!isAuthorized()) {
    http_response_code(403);
    echo 'Вы не авторизованы';
    die;
}

$dir = './tests';
$scan = array_diff(scandir($dir), array('..', '.'));

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Список тестов</title>
    </head>
    <body>
        <div>
            Добро пожаловать <b><?= $_SESSION['user']['username'] ?></b>
        </div>
        <h1>Список тестов:</h1>
        <ul>
           <?php foreach ($scan as $test) { ?>
               <li><a href='test.php?test=<?= $test; ?>'><?= $test . '<br>'; ?></a></li>
           <?php
           }
           if (isAdmin()): ?>
                <li><a href="admin.php">Загрузить новый тест</a><br></li>
           <?php endif; ?>
           <?php foreach ($scan as $test) { ?>
                <li><a href="<?php unlink($test); ?>">Удалить тест <?= $test ?></a><br></li>
           <?php } ?>
            <li><a href="logout.php">Выход</a></li>
        </ul>
    </body>
</html>