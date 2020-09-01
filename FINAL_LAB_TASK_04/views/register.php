<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" id="name" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" id="email" name="email" onkeyup="f2()"></td>
					<td id="emailmsg"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" onclick="f1()">
						<a href="login.php" style="display: none">Login</a></td>
				</tr>
			</table>
		</fieldset>
	</form>

	<script type="text/javascript">
		function f1() {
			
			var name=document.getElementById('email').value;
			var email=document.getElementById('email').value;
			var password=document.getElementById('email').value;

			if(name!="" && email!="" && password!="" && document.getElementById('emailmsg').innerHTML=="")
			{
				var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/regCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('name='+name+'&passowrd='+password+'&email='+email+);

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('emailmsg').innerHTML = this.responseText;
				}else{
					document.getElementById('emailmsg').innerHTML = "";
				}
				
			}	
			}
				




				document.getElementsByTagName('a')[0].style.display='inline';
			}
		}

		function f2()
		{
			var email = document.getElementById('email').value;
			var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/emailCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('email='+email);

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('emailmsg').innerHTML = this.responseText;
				}else{
					document.getElementById('emailmsg').innerHTML = "";
				}
				
			}	
			}
		}

		/*function f1()
		{
			document.getElementaByTagName('a')[0].style.display='inline';
		}
		function validate()
		{
			var validname=validatename();
			var validemail=validateemail();
			var validpasssword=validatepassword();
			if(validname==true && validemail==true && validpassword==true)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		//name
		function validatename()
		{
			var name=document.getElementById('username').value;
			if (name=="") 
			{
				document.getElementById('usernamemsg').innerHTML="UserName can not be empty";
				return false;
			}
			else
			{
				return true;
			}	
			function removername()
			{
				document.getElementById('usernamemsg').innerHTML="";
			}
		}
		//email
		function validateemail()
		{
			var email=document.getElementById('email').value;
			if (email=="") 
			{
				document.getElementById('emailmsg').innerHTML="Email can not be empty";
				return false;
			}
			else
			{
				return true;
			}	
		}



	</script>
</body>
</html>