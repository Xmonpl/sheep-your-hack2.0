<?php
	include_once("user.php");
	$email = @$_POST['email'];
	$password = @$_POST['password'];	
	if(!empty($email) && !empty($password)) {
		$user = new User();
		if($user->login($email, $password)){
			echo("true");
		}else{
			echo("ełoł 2");
		}
	}else{
		echo("ełoł 1");
	}
?>