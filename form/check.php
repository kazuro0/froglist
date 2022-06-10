<?php
    $user = filter_var(trim($_POST['user']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $pass2 = filter_var(trim($_POST['pass2']), FILTER_SANITIZE_STRING);

    if(mb_strlen($user) < 4 || mb_strlen($user) > 20) {
        echo "Недопустимая длина логина (от 4 до 20 символов)";
        exit();
    } else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 25) {
        echo "Недопустимая длина пароля (от 6 до 25 символов)";
        exit();
    } else if($pass != $pass2) {
        echo "Пароли не совпадают";
        exit();
    }

    $pass = md5($pass."fsrre21wq3as");

    $mysql = new mysqli('localhost', 'root', 'root', 'frog');
    $mysql->query("INSERT INTO `users` (`user`, `pass`) 
    VALUES('$user', '$pass')");

    $mysql->close();

    header('Location: /');
?>