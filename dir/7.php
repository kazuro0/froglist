<?php
	if($_COOKIE['login'] == ''):
		header('Location: /');
?>
<?php endif;?>

<?php
	require_once '../config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЛЯГУШКИ</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../src/css/list.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<header class="header">
		<div class="hat">
			<div class="userh">
				<a href="../form/exit.php" class="exit">
					выйти
				</a>
				<div class="username"><?=$_COOKIE['login']?></div>
			</div>
			<button class="o-menu">
				<img src="../src/img/micon.svg" alt="omenu">
			</button>
			<h1>ЛЯГУШКИ</h1>
			<ul class="menu">
				<li>
					<a href="1.php">
						Заботливая лягушка
					</a>
				</li>
				<li>
					<a href="2.php">
						Щитоспинка
					</a>
				</li>
				<li>
					<a href="3.php">
						Лягушка-голиаф
					</a>
				</li>
				<li>
					<a href="4.php">
						Панамская золотая лягушка
					</a>
				</li>
				<li>
					<a href="5.php">
						Африканская дождевая лягушка
					</a>
				</li>
				<li>
					<a href="6.php">
						Лягушка-бык
					</a>
				</li>
				<li>
					<a href="7.php">
						Голубой древолаз
					</a>
				</li>
			</ul>
		</div>
	</header>
	<section id="section" class="section">
		<div class="image">
			<img src="../src/img/blue.jpg" alt="hello">
		</div>
		<div class="info">
			<h2>
				Голубой древолаз!
			</h2>
			<p>
				Кожный покров этой ослепительно красивой лягушки имеет огромное число желез, выделяющих яд при прикосновении. Однако для выработки яда это животное нуждается в определенных веществах, которые получает с пищей: муравьями, многоножками и т.д. Если кормить древолаза чем-то другим, то он будет совершенно безопасен. Другими словами, его можно содержать в домашних условиях, совершенно не боясь его яда.
				У голубых древолазов именно отцы заботятся о детенышах, в то время как матери отдыхают и восстанавливаются после беременности.
			</p>
		</div>
		<div class="comfield">
			<div class="komentarii">Комментарии</div>
			<?php
				$id = 7;
				$mysql = new mysqli('localhost', 'root', 'root', 'frog');
				$result = $mysql->query("SELECT * FROM `comments` WHERE `pageid` = '$id' ORDER BY 'id'");
			?>
			<?php while($name = mysqli_fetch_assoc($result)) {?>
			<div class="nickname">
				<?=$name['nickname']?>
			</div>
			<div class="coms">
				<?=$name['text']?>
			</div>
			<?php } ?>
			<?php $mysql->close(); ?>
			<form action="comments.php" method="post">
				<input class = "pg" name="pg" id="pg" type="text" value="7"></input>
				<textarea name="cominput" id="cominput" type="text" placeholder="Ваш комментарий"></textarea>
				<div class="span" id="span"></div>
				<button name="button" id="button" class="button">
					отправить
				</button>
			</form>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
	<script src="../src/js/main.js"></script>
	<script src="../src/js/com.js"></script>
</body>
</html>