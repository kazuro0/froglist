<?php
	require_once 'config/connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЛЯГУШКИ</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="src/css/main.css">
	<meta name="viewport" content="width=device-width, initial-size=1.0">
</head>
<body>
	<section id="section" class="section">
		<div class="container">
			<h1>ЛЯГУШКИ</h1>
			<h2>Регистрация</h2>
			<div class="field2">
				<form action="form/check.php" method="post">
					<input name="user" id="user" type="text" placeholder="Логин" pattern="/^[a-zA-Z1-9]+$/" title="Только латиница и цифры">
					<input name="pass" id="pass" type="password" placeholder="Пароль">
					<input name="pass2" id="pass2" type="password" placeholder="Повторите пароль">
					<div class="span" id="span"></div>
					<button name="button" id="button" class="button" type="submit">
						создать
					</button>
				</form>
				<a href="index.php" name="reg" id="reg" class="reg">	
					войти
				</a>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
	<script src="../src/js/reg.js"></script>
</body>
</html>