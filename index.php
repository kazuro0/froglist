<?php
	require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЛЯГУШКИ</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="src/css/main.css">
	<meta name="viewport" content="width=device-width, initial-size=1.0">
</head>
<body>
	<section id="section" class="section">
		<div class="container">
			<h1>ЛЯГУШКИ</h1>
			<?php
				if($_COOKIE['login'] == ''):
			?>
			<h2>Вход</h2>
			<div class="field">
				<form action="form/auth.php" method="post">
					<input name="user" id="user" type="text" placeholder="Логин">
					<input name="pass" id="pass" type="password" placeholder="Пароль">
					<div class="span" id="span"></div>
					<button name="button" id="button" class="button">
						войти в систему
					</button>
				</form>
			<?php else: ?>
				<h2>Вы уже вошли!</h2>
				<a href="form/exit.php" name="reg" id="reg" class="reg">
					выйти
				</a>
				<a href="dir/1.php" name="reg" id="reg" class="reg">
					вернуться
				</a>
			<?php endif;?>

				<a href="reg.php" name="reg" id="reg" class="reg">
					регистрация
				</a>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
	<script src="../src/js/index.js"></script>
</body>
</html>