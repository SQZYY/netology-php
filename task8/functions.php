<?php

session_start();

function login($login) {
    $user = getUser($login);
    if ($user && $user['user'] == $login) {
        $_SESSION['user'] = $user;
        return true;
    }
    return false;
}

function isAuthorized() {
    return !empty($_SESSION['user']);
}

function isAdmin() {
    return isAuthorized() && $_SESSION['user']['is_admin'];
}

function getUsers() {
    $fileData = file_get_contents(__DIR__ . '/data/login.json');
    $users = json_decode($fileData, true);
    if (empty($users)) {
        return [];
    }
    return $users;
}

function getUser($login) {
    $users = getUsers();
    foreach ($users as $user) {
        if ($user['login'] == $login) {
            header("Location: list.php");
            die;
        }
    }
    return null;
}

function logout()
{
    session_destroy();
    header('Location: index.php');
}

function redirect($page) {
    header("Location: $page.php");
    die;
}