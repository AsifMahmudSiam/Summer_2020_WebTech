
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
if (isset($_POST['degree1']) || isset($_POST['degree2']) || isset($_POST['degree3'])) 
{
	$a=$_POST['degree1'];
	$b=$_POST['degree2'];
	$c=$_POST['degree3'];
	echo $a;
	echo $b;
	echo $c;
	
}
else
{
	if (isset($_POST['submit'])) {
		# code...
		echo "At least one of them has to be selected";
	}
}
if (empty($_POST['degree']))
{
	$errors['degree1']= "You must fill up the field";
}
if (empty($_POST['blood']))
{
	$errors['blood1']= "You must fill up the field";
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
			Name:<input type="text" name="name" value="<?php if(isset($_POST['name']));?>"><br>
			<p><?php if(isset($errors['name1'])) echo $errors['name1'];?></p>
			
			Email:<input type="email" name="email" value="<?php if(isset($_POST['email']));?>"><br>
			<p><?php if(isset($errors['email1'])) echo $errors['email1'];?></p>
		


			Gender:<input type="radio" name="gender" value="<?php if(isset($_POST['gender']));?>">  Male 
						<input type="radio" name="gender" value="<?php if(isset($_POST['gender']));?>"> Female
						<input type="radio" name="gender" value="<?php if(isset($_POST['gender']));?>"> Other<br>


                    <p><?php if(isset($errors['gender1'])) echo $errors['gender1'];?></p>
						
						DATE:<input type="text" size="3%">/<input type="text" size="3%">/<input type="text" size="5%"> (dd/mm/yyyy)<br>
						<p><?php if(isset($errors['date1'])) echo $errors['date1'];?></p>

						Degree:	<input type="checkbox" name="degree1" value="SSC"> SSC
			<input type="checkbox" name="degree2" value="HSC"> HSC
			<input type="checkbox" name="degree3" value="BSc"> BSc<br>
						<p><?php if(isset($errors['degree1'])) echo $errors['degree1'];?></p>

						<td>Blood Group</td>
					<td>
						<select>
							<option>A+</option>
							<option>B+</option>
							<option>O+</option>
							<option>AB+</option>
						</select>
						<p><?php if(isset($errors['blood1'])) echo $errors['degree1'];?></p>
					</td>
					
					<input type="submit" value="submit"><br>	


		</fieldset>
	</form>



</body>
</html>



