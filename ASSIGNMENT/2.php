
<?php
if($_POST)
{


$errors =array();
if (empty($_POST['name']))
{
	$errors['name1']= "You must fill up the field";
}
if (empty($_POST['email']))
{
	$errors['email1']= "You must fill up the field";
}
if (empty($_POST['gender']))
{
	$errors['gender1']= "You must fill up the field";
}
if(count($errors)==0)
{
	header("Location: 3.php");
	exit();
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Personal Information</title>
</head>
<body>
	<form target="" method="POST">
		<fieldset>
			<legend>Personal Information</legend>
			Name:<input type="text" name="name" value=""><br>
			<p><?php if(isset($errors['name1'])) echo $errors['name1'];?></p>
			
			Email:<input type="email" name="email" value=""><br>
			<p><?php if(isset($errors['email1'])) echo $errors['email1'];?></p>
		


			Gender:<input type="radio" name="gender">  Male 
						<input type="radio" name="gender"> Female
						<input type="radio" name="gender"> Other<br>

                    <p><?php if(isset($errors['gender1'])) echo $errors['gender1'];?></p>
						DATE:<input type="text" size="3%">/<input type="text" size="3%">/<input type="text" size="5%"> (dd/mm/yyyy)<br>
						

						Degree:	<input type="checkbox"> SSC 
						<input type="checkbox"> HSC 
						<input type="checkbox"> BSc. 
						<input type="checkbox"> MSc.<br> 
					
					<input type="submit" value="submit"><br>	


		</fieldset>
	</form>



</body>
</html>


