<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<center>
		 <legend><b>Online Health Care</b></legend><br>
		  <legend><b>Plasma Sector</b></legend>
		</center><br>


	<center>
			WELCOME <?php
			session_start();
			echo $_SESSION['username'];


			?>
		</center><br>

		<Center>
			
			<a href="viewdonor.php"><u>View Donor List</a>
		
			<a href="viewreceiver.php"><u>View Receiver List</a>

		</center>


</fieldset>
</body>
</html>