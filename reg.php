
<html>
<head>
	<title>регистрация</title>
	<?php
		include "include.php";
	?>
	
</head>
<body>
		 <div class="container">
		 	<div class="red">
		 	<div class="white">
				<form method="POST" action="reg_logic.php" class="news">
					<input type="login" name="login" placeholder="ЛОГИН"><br>
					<input type="email" name="email" placeholder="EMAIL"><br>
					<input type="password" name="password" placeholder="ПАРОЛЬ"><br>
					<input type="password" name="password2" placeholder="ПРОВЕРКА ПАРОЛЯ"><br>
					<button>ЗАРЕГЕСТРИРОВАТЬСЯ</button>
					<a href="login.php" class="text2">ВХОД</a>
				</form>
			</div>
		</div>
		 </div>
	</body>
</html>