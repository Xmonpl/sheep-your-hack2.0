<?php
	class User{
		private $email;
		private $password;
		private $name;
		
		function register($email, $password, $name){
			$db = file_get_contents("db.json");
			$json = json_decode($db, true);
			//sprawdzanie czy taki email ejst w bazie if jest
			if (@$json[$email] == null){
				session_start();
				$this->email = $email;
				$this->name = $name;
				$this->password = password_hash($password, PASSWORD_BCRYPT);
				$_SESSION['email'] = $this->email;
				$_SESSION['name'] = $this->name;
				$json[$email] = array("email"=> $email, "password"=> $this->password, "name" => $this->name);
			
				file_put_contents("db.json", json_encode($json, false));
				return true;
			}else{
				return false;
			}		
		}
		
		function login($email, $password){
			//przeszukiwanie bazy danych po emailu if found sprawdzanie hasla password_verify ( string $password , string $hash ) : bool
			$db = file_get_contents("db.json");
			$json = json_decode($db, true);
			if (@$json[$email] != null){
				//print_r($json[$email]);
				if (password_verify($password, $json[$email]['password'])){
					session_start();
					$_SESSION['email'] = $email;
					$_SESSION['name'] = $json[$email]['name'];
					return true;
				} else{
					return false;
				}
			}else{
				return false;
			}
		}
		
		function setEmail($email){
			$db = file_get_contents("db.json");
			$json = json_decode($db, true);
			// /$this.$email = $email;
			if (@$json[$email] != null){
				//session_start();
				//$json[$email] = array("email"=> $email, "password"=> $this->password, "name" => $this->name);
				//$_SESSION['email'] = $email;
				echo("<script>alert('".$this->password."')</script>");
				
			}
			return false;
			
		}
		
		function getEmail(){
			return $this.$email;
		}
		
		function setPassword($password){
			$this.$password = $password;
			//update db
		}
		
		function getPassword(){
			return $this.$password;
		}
		
	}
	/*
	$user = new User();
	if($user->register("xmon@t.pl", "xmodaasdn")){
		echo("true0");
	}else{
		echo("falkse");
	}
	*/
?>