<?php
    $user = filter_var(trim($_POST['user']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if(mb_strlen($user) == 0) {
        echo "Введите логин";
        exit();
    } else if(mb_strlen($pass) == 0) {
        echo "Введите пароль";
        exit();
    }

    $pass = md5($pass."fsrre21wq3as");

    $mysql = new mysqli('localhost', 'root', 'root', 'frog');

    $result = $mysql->query("SELECT * FROM `users` WHERE `user` = '$user'
    AND `pass` = '$pass'");

    $login = $result->fetch_assoc();
    if(count($login) == 0) {
        // echo "Пользователь не найден";
        $err = "Пользователь не найден";
    }

    setcookie('login', $login['user'], time() + 3600 * 24, "/");

    $mysql->close();

    header('Location: ../dir/1.php');
?>