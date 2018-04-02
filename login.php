<?php 

	error_reporting(E_ALL);
	ini_set("display_errors",1);
	include("config.php");
	include("access.php");
 ?>
<html>
<head>
	<title>вход</title>
	<?php
			include "include.php";

		?>
</head>
<body>
	<div class="container">
		<?php 
			if($auth){
			echo "Страница доступа только неавторизованны пользователям";
		} else{
		 ?>
		 <div class="red">
		 	<div class="white">
				<form method="POST" action="auth.php" class="news">
					<input type="text" name="login" placeholder="ЛОГИН"><br>
					<input type="password" name="password" placeholder="ПАРОЛЬ"><br>
					<button>ВХОД</button>
					<a href="reg.php" class="text2">ЗАРЕГЕСТРИРОВАТЬСЯ</a>
				</form>
			</div>
		</div>
		<?}?>
	</div>
</body>
</html>