<?php 
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
require("config.php");
require("access.php"); 

$photoCount = $_POST["photoCount"];

for($i=1; $i<=$photoCount; $i++){
	$path = $_FILES["photo".$i]['name'];
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	$name = time().rand().".".$ext;

	$uploaddir = 'C:\\ospanel\\domains\\sait.ru\\uploaddir\\'; 
	$uploadfile = $uploaddir . $name; 


	$stmt = $db->prepare("INSERT INTO files (txt,photo,authorid,addtime) VALUES (:txt,:photo,:authorid,:addtime)"); 

	$stmt->execute(array( 
	"txt" => $_POST["txt"], 
	"photo" => "/uploaddir/".$name ,
	"authorid"=>$user["id"],
	"addtime"=>time()
	)); 
	move_uploaded_file($_FILES["photo".$i]['tmp_name'], $uploadfile);
}
header("Location:/index.php");
?>
