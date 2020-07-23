html>
<head>
	<title> Personal Information</title>
</head>
<body>
	<form action="" method="POST">
		<fieldset>
			<legend>Name</legend>
			Name:<input type="text" name="name" value=""><br>
			
			<input type="submit" name="" value="submit">

		</fieldset>
	</form>

	<?php 
	if ($_SERVER["REQUEST -METHOD"] == "POST")
	{

		$name = $_POST["Name"];
	}
	?>



</body>
</html>



