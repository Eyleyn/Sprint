<?php
	include 'DBConnector.php';

	$delRow = $_POST['id'];
	
	$sql = "DELETE FROM registration WHERE id = '$delRow'";

	if($conn -> query($sql) == TRUE){
		header("Location: displayadmin.php"); 
  		exit();
	}

	$conn->close();
?>