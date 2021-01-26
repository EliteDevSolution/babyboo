<?php
	session_start();
	include  "db_config.php";
	include "function.php";

	if($_POST['UserPass'] != $_POST['UserPass_Confirm']) 
	{
		echo"<script>alert('Confimed Password is not match.');document.location.href='signupuser.html';</script>";		
	} else
	{
		if (isset($_POST['Email'])) {
			$sql = "INSERT INTO user VALUES (null,'".$_POST['Email']."','".$_POST['UserPass']."','".$_POST['Phone']."')";
		    $result = insertData($sql, $conn);
		  if ($result=='true')
			echo "<script>alert('The User Signup is successful.');document.location.href='indexuser.html';</script>";
		  } else {
			echo "<script>alert('Data can't be saved');document.location.href='signupuser.html';</script>";
		  }
	}
?>