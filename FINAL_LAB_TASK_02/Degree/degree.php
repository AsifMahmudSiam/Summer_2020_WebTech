<?php

if(isset($_POST['submit']))
{
	if (isset($_POST['ssc'])) 
	{
		echo $_POST['ssc']."<br>";
	}
	if (isset($_POST['hsc'])) 
	{
		echo $_POST['hsc']."<br>";
	}
	if (isset($_POST['bsc'])) 
	{
		echo $_POST['bsc']."<br>";
	}
	
}

?>