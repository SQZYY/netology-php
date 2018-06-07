<?php

if (!isset($_GET['test'])) {
    header('Location: ./list.php');
    die();
}

$filename = './tests/' . $_GET['test'];

if (file_exists($filename)) {
    $test = json_decode(file_get_contents($filename), true);
} else {
    header('Location: ./list.php');
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($test as $key => $value) {
        $testNum = $value['result'];
        if ($testNum == $_POST[$key]) {
            echo 'Правильно' . '<br>';
        } else {
            echo 'Не правильно' . '<br>';
        }
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
                foreach ($test as $name => $value) {
                    $answerNum = $value['result'];
                ?>
                <label for="answer_<?= $name; ?>"><?= $value['question']; ?></label><br>
                <?php
                foreach ($value['variables'] as $var) {
                    echo $var . '<br>';
                }
                ?>
                <label>
                    <input type="text" name="<?= $name; ?>">
                </label><br>
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