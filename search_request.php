<?php
include("config.php");
include("access.php");

$postStmt= $db->prepare("SELECT * FROM `files` WHERE `txt` LIKE :txt");
$postStmt->execute(array(
	'txt' => "%".$_GET["txt"]."%"
));

$return=[];
foreach ($postStmt as $post) {
	$return[] = $post;
}

echo json_encode($return);