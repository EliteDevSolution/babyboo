<?php
	session_start();
	include  "db_config.php";

	$stmt = $conn->query("SELECT * FROM admin WHERE AdminEmail='".$_POST['AdminEmail']."'  AND KataLaluan='".$_POST['KataLaluan']."'");
	if($stmt->rowCount() !=0){ // have a record 
	$row = $stmt->fetch(PDO::FETCH_ASSOC); // fetch a record
			
			$_SESSION['Id'] = $row['Id'];
			
			echo"<script>document.location.href='admin/index.php';</script>";
			}

	else {
		echo"<script>alert('Wrong Email & Password');document.location.href='index.html';</script>";
	}
?>