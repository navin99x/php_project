<?php

	$con = mysqli_connect('localhost','root','root','student_management');

	if($con == false){
		echo "Connection not successful";
	}
	
	mysqli_set_charset($con,"utf8");
?>
