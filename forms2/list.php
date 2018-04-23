<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $testName = isset($_FILES['test']['name']) ? $_FILES['test']['name'] : '';
    $testTmpFileName = isset($_FILES['test']['tmp_name']) ? $_FILES['test']['tmp_name'] : '';
    if ($testName) {
        $testFileName = __DIR__ . '/tests/';
        $successMoved = move_uploaded_file($testTmpFileName, $testFileName . $testName);
    }
    else {
        header('Location: admin.php');
    }
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
        <h1>Список тестов:</h1>
                <?php foreach ($scan as $test) { ?>
                <a href='test.php?test=<?php echo $test; ?>'><?php echo $test . '<br>'; ?></a>
        <?php } ?>
        <a href="admin.php">Загрузить новый тест</a><br>
    </body>
</html>