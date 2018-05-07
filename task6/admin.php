<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $testName = isset($_FILES['test']['name']) ? $_FILES['test']['name'] : '';
    $testTmpFileName = isset($_FILES['test']['tmp_name']) ? $_FILES['test']['tmp_name'] : '';
    if ($testName) {
        $testFileName = __DIR__ . '/tests/';
        $successMoved = move_uploaded_file($testTmpFileName, $testFileName . $testName);
        header('Location: list.php');
    }
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Генератор тестов</title>
    </head>
    <body>
        <form enctype="multipart/form-data" action="" method="POST">
            <label for="file">Отправить тест: </label>
            <input type="file" name="test" id="file">
            <input type="submit" value="Отправить">
        </form>
    </body>
</html>