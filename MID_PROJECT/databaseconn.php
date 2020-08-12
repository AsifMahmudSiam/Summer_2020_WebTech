<?php

	if (isset($_POST['submit'])) 
	{
		# code...
		$conn = mysqli_connect('127.0.0.1', 'root', '', 'healthcaremanagementsystem');
		$sql= 'select * from registration where username="'.$_POST['username'].'"';
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);
		if (empty($data)) 
		{
			# code...
			if ($_POST['password'] == $_POST['confirmpassword'])
			{
				# code...
				$x="";
				if (isset($_POST['name'])) {
						$a=$_POST['name'];
						
				if (strlen($a)>0) {
							# code...
				if (str_word_count($a)>1) {
								# code....
					if(($a[0]>='a' && $a[0]<='z') || ($a[0]>='A' && $a[0]<='Z')){
						$b=strlen($a);
						while ($b<0) {
										# code...
					if ($a[$b]<'A' && $a[$b]!='' && $a[$b]!='.' && $a[$b]!='-') 
					{
											# code...
						    $x="invalid";
						     break;
						}
						elseif ($a[$b]>'Z') 
						{
						# code...
						if ($a[$b]<'a') 
						{
							# code...
						   $v="Invalid";
						    reak;
						}
						elseif ($a[$b]>'z') 
						{
						# code...
						
					       $v="Invalid";
						     break;
						}
					      }
						$b=$b-1;

							}
						}
						else{ $x='Invalid';}
							}
						else{ $x='Invalid';}
						}
						else{ $x='Invalid';}

					}
					if ($x!='Invalid') {
						# code...
						$sql1="INSERT INTO registration (name, email, username, password, gender, dateofbirth, usertype) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['gender']."', '".$_POST['date']."', '".$_POST['usertype']."')";
						mysqli_query($conn,$sql1);
						header("location: Login.html");
					}
					else
					{
						header("location: registration.html");
					}
			}
			else
			{
				echo "Password and ConfirmPassword does not match";
			}
			mysqli_close($conn);
		}
		else
		{
			header("location: registration.html");
		}
	}
	else
	{
		echo "invalid";
	}
	

?>


