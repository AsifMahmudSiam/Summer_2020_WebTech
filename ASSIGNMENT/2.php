
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
$flag=true;

if (isset($_GET['day'])) {

	$a=(int)$_GET['day'];
	if (strlen($a)>0) {
		
		if ($a>0 && $a<=31) {
		
			echo $a;
		}
		else
		{
			$flag=false;
		}
	}
}

if (isset($_GET['month'])) {

	$a=(int)$_GET['month'];
	if (strlen($a)>0) {
	
		if ($a>0 && $a<=12) {
			
			echo $a;
		}
		else
		{
			$flag=false;
		}
	}
}
if (isset($_GET['year'])) {
	# code...
	$a=(int)$_GET['year'];
	if (strlen($a)>0) {
	
		if ($a>=1900 && $a<=2016) {
		
			echo $a;
		}
		else
		{
			$flag=false;
		}
	}
}
if ($flag==false) {
	# code.
	echo "invalid";
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
						
						DATE:<pre class="tab">dd   mm     yyyy</pre><br>
			<input type="text" name="day" size="1%">/
			<input type="text" name="month" size="1%">/
			<input type="text" name="year" size="2%"><br>
			<br>
						<p><?php if(isset($errors['date1'])) echo $errors['date1'];?></p>

						Degree:	<input type="checkbox" name="degree1" value="SSC"> SSC
			<input type="checkbox" name="degree2" value="HSC"> HSC
			<input type="checkbox" name="degree3" value="BSc"> BSc<br>
						<p><?php if(isset($errors['degree1'])) echo $errors['degree1'];?></p>
						<p><?php if(isset($errors['degree2'])) echo $errors['degree2'];?></p>
						<p><?php if(isset($errors['degree3'])) echo $errors['degree3'];?></p>



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



