<?php	
	error_reporting(E_ALL);
	ini_set("display_errors",1);
	require("config.php");
	require("access.php");

	$FirstName=$_POST["FirstName"];
	$LastName=$_POST["LastName"];
	$path = $_FILES['image2']['name'];
	if($path != "") {
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$name = time().rand().".".$ext;

		$time=time();
		$uploaddir = 'C:\\ospanel\\domains\\sait.ru\\uploaddir\\'; 

		$uploadfile = $uploaddir . $name; 

		move_uploaded_file($_FILES['image2']['tmp_name'], $uploadfile);
	$updateStatement = $db->prepare("UPDATE `user` SET `FirstName`=:FirstName , `LastName`=:LastName, `image2`=:image2 WHERE `login`=:login");

	$updateStatement->execute(array(
			"FirstName"=>$FirstName,
			"LastName"=>$LastName,
			"login"=>$user['login'],
			"image2"=>"/uploaddir/".$name 
		));
	} else {

		$updateStatement = $db->prepare("UPDATE `user` SET `FirstName`=:FirstName , `LastName`=:LastName WHERE `login`=:login");

	$updateStatement->execute(array(
			"FirstName"=>$FirstName,
			"LastName"=>$LastName,
			"login"=>$user['login']
		));
	}
		header("Location:/profile.php");

?>