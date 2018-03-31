<?php
include("config.php");
include("access.php");
?>
<html>
<head>
	<title>добавление_поста</title>
	<?php
		include "include.php";
	?>
</head>
<body>
	<div class="container">
		<?php
			include "private.php";
		?>
		<div class="whitebox3">
			<form method="POST" action="downoload_files.php" class="news" enctype="multipart/form-data">
			<input type="text" name="txt"><br>
			<select name="photoCount" id="photoCount">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
			<br>
			<input type="file" id="photo1" name="photo1">
			<br>
			<input type="file" id="photo2" name="photo2">
			<br>
			<input type="file" id="photo3" name="photo3">
			<br>
			<input type="file" id="photo4" name="photo4">
			<br>
			<input type="file" id="photo5" name="photo5">
			<br>
			<input type="file" id="photo6" name="photo6">
			<br>
			<input type="file" id="photo7" name="photo7">
			<br>
			<input type="file" id="photo8" name="photo8">
			<br>
			<input type="file" id="photo9" name="photo9">
			<br>
			<input type="file" id="photo10" name="photo10">
			<br>
			<button type="submit" value="Загрузить">Добавить</button>
		</div>
	</div>
</body>
</html>