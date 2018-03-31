<?php
include("config.php");
include("access.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>настройки</title>
	<?php
		include "include.php";
	?>
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
			<?php
		include "private.php";
	?>
	<div class="red">
		 	<div class="white">
				<form method="POST" action="settings_logic.php" class="news" enctype="multipart/form-data">
					<input type="text" name="FirstName" value="<?=$user["FirstName"]?>" placeholder="ИМЯ"><br>
					<input type="text" name="LastName" value="<?=$user["LastName"]?>" placeholder="ФАМИЛИЯ"><br>
					<input type="file" name="image2" ><br>
					<button type="submit">ОТПРАВИТЬ</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>