<?php
    $user = $_COOKIE['login'];
    $com = filter_var(trim($_POST['cominput']), FILTER_SANITIZE_STRING);
    $page = filter_var(trim($_POST['pg']), FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', 'root', 'frog');

    $mysql->query("INSERT INTO `comments` (`nickname`, `text`, `pageid`) 
    VALUES('$user', '$com', '$page')");
    // die(mysql_error());

    $mysql->close();

    switch ($page) {
        case 1:
            header('Location: ../dir/1.php');
            break;
        case 2:
            header('Location: ../dir/2.php');
            break;
        case 3:
            header('Location: ../dir/3.php');
            break;
        case 4:
            header('Location: ../dir/4.php');
            break;
        case 5:
            header('Location: ../dir/5.php');
            break;
        case 6:
            header('Location: ../dir/6.php');
            break;
        case 7:
            header('Location: ../dir/7.php');
            break;
    }
?>