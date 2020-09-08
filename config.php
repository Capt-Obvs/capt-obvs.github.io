<?php
	session_start();
	
	$conn=mysqli_connect("localhost", "root", "", "miner");
	if(mysqli_connect_errno()){
		header('Location: bad_connection.html');
	}
?>
