<?php
	include_once("user.php");
	$email = @$_POST['email'];
	$password = @$_POST['password'];	
	$name = @$_POST['name'];
	if(!empty($email) && !empty($password) && !empty($name)) {
		$user = new User();
		if($user->register($email, $password, $name)){
			echo("true");
		}else{
			echo("ełoł");
		}
	}else{
		echo("ełoł");
	}
?>