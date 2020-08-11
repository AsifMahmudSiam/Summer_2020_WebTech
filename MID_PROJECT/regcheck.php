<?php

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$uname = $_POST['userName'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		

		if(empty($name) ||  empty($email) || empty($username) || empty($password) || empty($confirmPassword) || empty($gender) 
		}
		else 
		{

			if($password!=$confirmPassword)
			{
				echo "Match Password".'<a href="home.php"><u>Home</a>';
			}
			else
			{

			setcookie('name', $name, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('gender', $gender, time()+3600, '/');
			setcookie('day', $day, time()+3600, '/');
			setcookie('month', $month, time()+3600, '/');
			setcookie('year', $year, time()+3600, '/');
			setcookie('name', $name, time()+3600, '/');
			echo "Problem";

			header('location: login.html');
			}
		}

	}else{
		//header("location: login.html");
		echo "Not Set";
	}


?>