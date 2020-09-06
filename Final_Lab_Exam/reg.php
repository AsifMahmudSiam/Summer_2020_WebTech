<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>

	
</head>
<body>
<h1>Registration</h1>

<div class="reg">
	<form id="reg" method="post" action="">
	
	
	<lable>Name</lable><br>
	<input type="text" name:"name" placeholder="Enter Full Name" Class="name"><br><br>

	<lable>Number</lable><br>
	<input type="text" name:"password" placeholder="Enter phone number" class="name"><br><br>
	
	<lable>UserName</lable><br>
	<input type="text" name:"username" placeholder="Enter Enique Name" Class="name"><br><br>
	
	
	<lable>Password</lable><br>
	<input type="password" name:"password" placeholder="Enter password" class="name"><br><br>
	


	<lable>UserType</lable><br>
	<select name="usertype" class="name"required>
							<option value="author">Author</option>
						
						
						</select><br><br>
						
	
	<input type="checkbox" class="ch"><span class="ch">I Agree terms & conditions</span><br><br>
	
	<button type="submit" class="sub">Register Here </button>
		
		
	</form>

	
	
	
</div>

<script type="text/javascript">
		function f1() {
			
			var name=document.getElementById('name').value;
			var contact=document.getElementById('contact').value;
			var username=document.getElementById('UserName').value;
			var password=document.getElementById('password').value;

			if(name!="" && email!="" && password!="" && document.getElementById('contactmsg').innerHTML=="")
			{
				//alert("works");
				var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/regCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('name='+name+'&'+'password='+password+'&'+'email='+email+'&'+'username='+username);
			//alert('name='+name+'&'+'password='+password+'&'+'email='+email+'&'+'username='+username);

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('contactmsg').innerHTML = this.responseText;
				}else{
					document.getElementById('contactmsg').innerHTML = "";
				}
				
			}	
			}
				document.getElementsByTagName('a')[0].style.display='inline';
			}
		}

		function f2()
		{
			var username = document.getElementById('username').value;
			var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/emailCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('email='+username);

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('usernamemsg').innerHTML = this.responseText;
				}else{
					document.getElementById('usernamemsg').innerHTML = "";
				}
				
			}	
			}
		}


	</script>
	
</body>
</html>