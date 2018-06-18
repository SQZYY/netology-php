<?php

require_once 'functions.php';
$errors = [];
if (!empty($_POST)) {
    if (login($_POST['login'])) {
        header('Location: list.php');
        die;
    } else {
        $errors[] = 'Неверный логин';
    }
}
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Авторизация</title>
</head>
<body>
    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-wrap">
                        <h1>Авторизация</h1>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?= $error ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <form method="POST" id="login-form" action="">
                            <div class="form-group">
                                <label for="lg" class="sr-only">Логин</label>
                                <input type="text" placeholder="Логин" name="login" id="lg" class="form-control">
                            </div>
                            <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Войти">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>