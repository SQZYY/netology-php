<?php
require_once __DIR__ . '/functions.php';

if (isAuthorized()) {
    redirect('list');
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];

    if (login($login)) {
        redirect('list');
    } else {
        $errors[] = 'Логин введен не верно';
    }
}

?>

<!doctype html>
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
                            <? foreach ($errors as $error): ?>
                                <li><?= $error ?></li>
                            <? endforeach; ?>
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