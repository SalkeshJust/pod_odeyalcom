<?php	
	error_reporting(E_ALL);
	ini_set("display_errors",1);
	require("config.php");
	$stmt = $db->prepare("SELECT * FROM user WHERE login=? AND password=?");
	$password=md5($_POST["password"]);
	$login=$_POST["login"];
	$stmt->execute(array($login,$password));
	if($stmt->rowCount()==1){
		$hash=md5(time().$password.rand());
		$updateStatement=$db->prepare("UPDATE `user` SET `hash`=:hash WHERE `login`=:login");
		$updateStatement->execute(array(
			"hash"=>$hash,
			"login"=>$login
		));
		setcookie("hash",$hash,time()+60*60*24*365,"/");
		header("Location:/index.php");
	}
	else{
		header("Location:/login.php");
	}
?>