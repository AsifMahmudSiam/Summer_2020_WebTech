

<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'null_value'){
			echo "Username/Password field can't left empty...";
		}

		if($_GET['error'] == 'invalid_user'){
			echo "Invalid username or Password";
		}

		if($_GET['error'] == 'invalid_request'){
			echo "You have to login first...";
		}

	}else if(isset($_GET['success'])){
		
		if($_GET['success'] == 'registration_done'){
			echo "Registration Done! Now you can login...";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
<h1>Login</h1>
<div class="login">
<form id="login" method= "post"
action="">
	<lable>UserName</lable><br>
	<input type="text" name:"username" placeholder="Enter Username" id="name"><br><br>
	
	<lable>Password</lable><br>
	<input type="password" name:"password" placeholder="Enter password" id="name"><br><br>
	<button type="submit" id="sub">Login </button>
	
	
	
</form>
	
	
</div>
	
</body>
</html>