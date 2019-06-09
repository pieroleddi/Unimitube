<?php
	include "db.php";
	session_start();

	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
				
		$sql="SELECT * FROM utente WHERE email='$email' AND password='$password'";
		$result=$mysqli->query($sql);
      
		if($result->num_rows==1){
			$_SESSION["email"]=$email;
			header("location: ../home.php");
		}

		else echo"Wrong Email or Password";

   }
?>
