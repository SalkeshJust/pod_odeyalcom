<?php
include("config.php");
include("access.php");
$postStmt= $db->prepare("SELECT * FROM `files` WHERE id=:id");
$postStmt->execute(array(
	"id"=>$_GET["id"]
));
?>
<!DOCTYPE html>
<html>
<head>
	<title>фото</title>
	<?php
		include "include.php";
	?>
	<meta charset="utf-8">
</head>
<body>
	<div class="container">
		<div class="container">
		<?php
		include "private.php";
	?>
	<div class="profile">
		<?php
				foreach ($postStmt as $post) {
			?>
		<div class="white2 white3">
			<div class="photo2">
				<div class="img-container">
					<img src="<?php echo $post["photo"]?>">
				</div>	
			</div>
		</div>
		<div class="white2 white3">
			<?php
				echo $user["FirstName"];
				echo " ";
				echo $user["LastName"];
				?>
			<br/>
			<?php echo $post["txt"];?>
		</div>
	</div>
	<?php
				}
			?>
	</div>
	</div>
</body>
</html>