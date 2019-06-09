<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'unimitube');
	
	if($mysqli->connect_errno){
		$erroe=true;
		$err_msg="Database connection failed";
}

	?>