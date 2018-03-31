<?php

	error_reporting(E_ALL);
	ini_set("display_errors",1);
	require("config.php");
	$time=time();
	$stmt = $db->prepare("INSERT INTO user (login, email,password, regtime, lasttime) VALUES (?,?,?,?,?)");
	$password=md5($_POST["password"]);
	$stmt->bindParam(1, $_POST["login"]);
	$stmt->bindParam(2, $_POST["email"]);
	$stmt->bindParam(3, $password);
	$stmt->bindParam(4, $time);
	$stmt->bindParam(5, $time);

	$stmt->execute();
	header("Location:/login.php");
?>