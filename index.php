<?php
include("config.php");
include("access.php");

$postStmt= $db->prepare("SELECT * FROM `files` ");
$postStmt->execute(array());

$count_query=$db->query("SELECT COUNT(*) FROM files");
$count=$count_query->fetchColumn();
$number_of_pages=ceil($count/18);
$offset=0;
$current_page = 1;
if (isset($_GET['page'])) {
	$current_page=(int)$_GET["page"];
	if ($current_page<=$number_of_pages && $current_page>=1){
		$offset=18*($current_page-1);
	}
}
$page=$db->prepare("SELECT * FROM files ORDER BY id ASC LIMIT $offset, 18");
$page->execute(array());
?>

<html>
<head>
	<title>под_одеял.com</title>
	<?php
		include "include.php";
	?>

</head>
<body>
	<div class="container">
		<?php
		include "private.php";
	?>
	
	<div class="picture">
		<img src="/uploaddir/alene_SROChNO.jpg" class="no">
	</div>
	<div class="whitebox3">
		<?php
			foreach($page as $post) {
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
		<?
			echo $number_of_pages;
		?>
		<br></br>
		<?php
			for ($i=1; $i<=$number_of_pages;$i++){
				if(i<=3 or i>=($number_of_pages-3)){
					$active = "";
					if($i == $current_page) {
						$active = ' active_page';
					}
		?>
			<a class="number_of_page<?=$active?>" href="/?page=<?php echo $i;?>">
				<?php echo $i;?>
			</a>
		<?php
				}
			}	
		?>

	</div>

	</div>
</body>
</html>