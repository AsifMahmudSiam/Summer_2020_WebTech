<?php 
require_once('../service/userService.php');
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$name=$_POST['name'];
$user = [
				'username'=> $username,
				'password'=> $password,
				'email'=> $email,
				'name'=> $name,
			];
//echo $password;
//var_dump($user);			
$status = insert($user);
echo $status;
?>