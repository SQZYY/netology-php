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

foreach ($test as $key => $value) {
    $answerNum = $value['result'];

    var_dump($_POST["answer_[$key][$answerNum]"]);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ("answer_[$key][$answerNum]" === "???") {
        echo 'Правильно!';
    } else {
        echo 'Неправильно!';
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
                foreach ($test as $key => $value) {
                    $answerNum = $value['result'];
                ?>
                <label for="answer_<?= $key; ?>"><?= $value['question']; ?></label><br>
                <?php
                foreach ($value['variables'] as $var) {
                    echo $var . '<br>';
                }
                ?>
                <label>
                    <input type="text" name="answer_<?= $key; ?>">
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