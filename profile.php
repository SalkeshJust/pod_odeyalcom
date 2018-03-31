<?php
include("config.php");
include("access.php");
$postStmt= $db->prepare("SELECT * FROM `files` WHERE authorid=:authorid");
$postStmt->execute(array(
	"authorid"=>$user["id"]
));
?>

<html>
<head>
	<title>профиль</title>
	<?php
		include "include.php";
	?>
</head>
<body>
	<div class="container">
				<?php
		include "private.php";
	?>
	<div class="profile">
		<div class="whitebox">
			<div class="box">
			<div class="photo">
				<div class="img-container">
					<img src="<?=$user['image2']?>">
				</div>
			</div>
			
			<?php
				echo $user["FirstName"];
				echo " ";
				echo $user["LastName"];
			?>
			
			</div>
		</div>
		<div class="whitebox2">
			<?php
				foreach ($postStmt as $post) {
			?>
			<a href="/photo.php?id=<?=$post["id"]?>" class="photobox">
				<div class="img-container">
					<img src="<?php echo $post["photo"]?>">
				</div>
				<div class="txt">
					<?php echo $post["txt"]?>
				</div>
			</a>
			<?php
				}
			?>
		</div>
	</div>
	<div class="button3">
		<a href="settings.php" class="text2">НАСТРОЙКИ</a>
	</div>
	</div>
</body>
</html>