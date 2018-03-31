	<div class="button">
		<div class="button2">
				<a	href="search.php" class="a">ПОИСК</a>
		</div>
		<div class="button2">
			<a	href="index.php" class="a">ГЛАВНАЯ</a>	
		</div>
		<?php
		if ($auth) {
			
		?>
		<div class="button2">
			<a	href="profile.php" class="a">ПРОФИЛЬ</a>
		</div>
		<div class="button2">
			<a	href="downoload_post.php" class="a">ДОБАВИТЬ ФОТО</a>
		</div>
		<?php
	} else {
		?>
		<div class="button2">
			<a	href="reg.php" class="a">РЕГИСТРАЦИЯ</a>
		</div>
		<div class="button2">
			<a	href="login.php" class="a">ВХОД</a>
		</div>
		<?php
	}

		?>
		</div>