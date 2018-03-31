<?php
 
$auth = false;
 
if(isset($_COOKIE["hash"])) {
    $authStmt = $db->prepare("SELECT * FROM `user` WHERE `hash` = :hash");
    $authStmt->execute(array(
        "hash" => $_COOKIE["hash"]
    ));
    $auth = $authStmt->rowCount() == 1;
    $userStmt= $db->prepare("SELECT id,login,FirstName,LastName,lasttime,image2 FROM `user` WHERE `hash` = :hash");
	$userStmt->execute(array(
		"hash"=>$_COOKIE["hash"])
	);
	$user=[];
	foreach ($userStmt as $row) {	
		$user=$row;
	}
	}
 ?>