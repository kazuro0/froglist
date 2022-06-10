<?php
    setcookie('login', $login['user'], time() - 3600 * 24, "/");
    header('Location: /');
?>