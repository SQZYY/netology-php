<?php

$filename = './tests/' . $_GET['test'];

if (file_exists($filename)) {
    $test = json_decode(file_get_contents($filename), true);
} else {
    header('Location: ./list.php');
    die();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['answer'] === $_POST['test']) {
        echo 'Правильно!';
    } else {
        echo 'Неправильно!';
    }
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Тест</title>
    </head>
    <body>
        <form action="" method="post">
            <fieldset>
                <?php
                foreach ($test as $key => $value) {
                ?>
                <label for="test"><?=  $value['question']; ?></label><br>
                <?php
                foreach ($value['variables'] as $var) {
                    echo $var . '<br>';
                }
                ?>
                <input type="hidden" name="test" value="<?= $value['result'] ?>">
                <label><input type="text" name="answer"></label><br>
                <?php
                }
                ?>
                <input type="submit" value="Узнать результат">
            </fieldset>
        </form>
        <a href="./admin.php">Загрузить новый тест</a><br>
        <a href="./list.php">Список тестов</a>
    </body>
</html>