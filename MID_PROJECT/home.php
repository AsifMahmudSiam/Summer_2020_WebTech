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
			
			<a href="viewdonor.php"><u>View Donor List</a>&nbsp &nbsp
		
			<a href="viewreceiver.php"><u>View Receiver List</a>&nbsp &nbsp

			<a href="covid19.php"><u>COVID'19</a>&nbsp &nbsp





			<a href="feeedback.php"><u>Feedback</a>&nbsp &nbsp



		</center>

		<br>


<center>
		<table border="1">
		<tr>
			<td>Blood Group</td>
			<td>Plasma Donnor</td>
			
			


		</tr>

			<tr>
			<td>A+</td>
			<td>45</td>
			
		
		</tr>

		</tr>

			<tr>
			<td>A-</td>
			<td>25</td>
			
		
		</tr>

		</tr>

			<tr>
			<td>B+</td>
			<td>65</td>
			
		
		</tr>
		</tr>

			<tr>
			<td>B-</td>
			<td>15</td>
			
		
		</tr>

		</tr>

			<tr>
			<td>O+</td>
			<td>40</td>
			
		
		</tr>

				<tr>
			<td>O-</td>
			<td>22</td>
			
		
		</tr>

			<tr>
			<td>AB+</td>
			<td>48</td>
			
		
		</tr>

			<tr>
			<td>AB-</td>
			<td>10</td>
			
		
		</tr>
	</center>
</table>

<br>

<a href="logout.php"><u>Logout</a>


</fieldset>

</body>
</html>