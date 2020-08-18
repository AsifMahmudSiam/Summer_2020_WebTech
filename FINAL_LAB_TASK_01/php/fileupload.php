<?php

	if(isset($_POST['createcompany'])){

	
		$filedir = 'picture/'.time().'.jpg';

		if(move_uploaded_file($_FILES['companylogo']['tmp_name'], $filedir)){
			echo "Done";
		}else{
			echo "error";
		}
	}

?>