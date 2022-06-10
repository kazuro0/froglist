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
			<img src="../src/img/goliaph.jpg" alt="hello">
		</div>
		<div class="info">
			<h2>
				Лягушка-голиаф!
			</h2>
			<p>
				Достаточно редкий вид земноводных, обитающий в Западной Африке. Длинное тело лягушки достигает 30 см, а вес – непостижимых 3,5 кг. Самый крупный экземпляр, отловленный в Анголе, был длиной 40 см. Этот гигант среди бесхвостых земноводных любит чистую проточную воду, насыщенную кислородом. Рацион голиафа составляют тритоны, мелкие лягушки, головастики, мыши и ящерицы. Местные жители, в свою очередь, с удовольствием охотятся на эту удивительную лягушку, что угрожает сохранности вида.
			</p>
		</div>
		<div class="comfield">
			<div class="komentarii">Комментарии</div>
			<?php
				$id = 3;
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
				<input class = "pg" name="pg" id="pg" type="text" value="3"></input>
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