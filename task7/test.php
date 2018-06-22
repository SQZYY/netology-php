<?php

if (!isset($_GET['test'])) {
    header('Location: ./list.php');
    die();
}

$filename = './tests/' . $_GET['test'];

if (file_exists($filename)) {
    $test = json_decode(file_get_contents($filename), true);
} else {
    http_response_code(404);
    include('404.htm');
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
        <form action="./testdone.php" method="post">
            <fieldset>
                <label for="name">Введите имя:</label>
                <input type="text" name="name" placeholder="Имя"><br>
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