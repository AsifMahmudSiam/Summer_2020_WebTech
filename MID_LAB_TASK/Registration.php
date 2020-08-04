<?php

	session_start();

	if(isset($_POST['submit'])){

        $id       = $_POST['id'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= md5($_POST['password']);
		$gender     =$_POST['gender'];
		$day        =$_POST['day'];
		$month      =$_POST['month'];
		$year        =$_POST['year'];



		if(empty($id) || empty($name) || empty($password) || empty($email)||empty($gender)||empty($day)||empty($month)||empty($year) ){
			echo "null submission found!";
		}else{
			setcookie('name',$id, time()+3600,'/');
			setcookie('name', $uname, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('gender', $gender, time()+3600, '/');
			setcookie('day', $day, time()+3600, '/');
			setcookie('month', $month, time()+3600, '/');
			setcookie('year', $year, time()+3600, '/');

			header('location: Login.html');
		}	

	}else{
		//echo "invalid request";
		header('location: Login.html');
	}




?> 