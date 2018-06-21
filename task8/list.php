<?php

require_once 'functions.php';

if (!isAuthorized()) {
    http_response_code(403);
    echo 'Вы не авторизованы';
    die;
}

$test_deleted = '';
if (!empty($_POST)) {
    if ($_POST['action'] == 'del-test') {
        $filename = './tests/' . $_POST['del-test'];
        if (unlink($filename)) {
            $test_deleted = 'Удален тест ' . $_POST['del-test'];
        } else {
            $test_deleted = 'Не удалось удалить тест ' . $_POST['del-test'];
        };
    };
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
    <?php if (isAdmin()): ?>
        <div>
            Добро пожаловать <b><?= $_SESSION['user']['username'] ?></b>
        </div>
    <?php endif; ?>
        <h1>Список тестов:</h1>
        <ul>
           <?php foreach ($scan as $test) { ?>
               <li><a href='test.php?test=<?= $test; ?>'><?= $test . '<br>'; ?></a></li>
           <?php
           }
           if (isAdmin()): ?>
               <li><a href="admin.php">Загрузить новый тест</a><br></li>
               <form method="POST" id="del-test-form" action="">
                   <div><?= $test_deleted ?></div>
                   <p><select name="del-test">
                       <?php foreach ($scan as $test) { ?>
                           <option value="<?= $test?>"><?= $test?></option>
                       <?php } ?>
                   </select></p>
                   <input type="hidden" name="action" value="del-test">
                   <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Удалить тест">
               </form>
           <?php endif; ?>
            <li><a href="logout.php">Выход</a></li>
        </ul>
    </body>
</html>